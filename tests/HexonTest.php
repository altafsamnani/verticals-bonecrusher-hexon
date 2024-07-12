<?php

namespace Bonecrusher\Hexon\Tests;

use Bonecrusher\Hexon\Api\Ads;
use Bonecrusher\Hexon\Api\Advertisers;
use Bonecrusher\Hexon\Api\ImportLink;
use Bonecrusher\Hexon\Api\Makes;
use Bonecrusher\Hexon\Api\Modules;
use Bonecrusher\Hexon\Api\Sites;
use Bonecrusher\Hexon\Api\Vehicles;
use Bonecrusher\Hexon\Hexon;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Mockery;

class HexonTest extends TestCase
{
    public function testInitialiseSitesApi()
    {
        $sites = Hexon::sites();
        $this->assertInstanceOf(Sites::class, $sites);
    }

    public function testInitialiseVehiclesApi()
    {
        $sites = Hexon::vehicles();
        $this->assertInstanceOf(Vehicles::class, $sites);
    }

    public function testInitialiseAdsApi()
    {
        $api = Hexon::ads();
        $this->assertInstanceOf(Ads::class, $api);
    }

    public function testInitialiseAdvertisersApi()
    {
        $api = Hexon::advertisers();
        $this->assertInstanceOf(Advertisers::class, $api);
    }

    public function testInitialiseModulesApi()
    {
        $api = Hexon::modules();
        $this->assertInstanceOf(Modules::class, $api);
    }

    public function testInitialiseMakesApi()
    {
        $api = Hexon::makes();
        $this->assertInstanceOf(Makes::class, $api);
    }

    public function testInitialiseImportLinkApi()
    {
        $api = Hexon::importLink();
        $this->assertInstanceOf(ImportLink::class, $api);
    }

    public function testGetMustAvoidHateOASLinks()
    {
        // given
        $mockedGuzzle = $this->getMockedGuzzle();
        Hexon::setGuzzleClient($mockedGuzzle);

        // perform
        /** @var Advertisers $test */
        $test = Hexon::advertisers();
        $test->get();

        // assertion
        $mockedGuzzle->shouldHaveReceived('request')->withArgs([
            Mockery::any(),
            Mockery::any(),
            Mockery::on(function ($options) {
                $this->assertRequestOptionsLinks($options, false);

                return true;
            }),
        ])->once();
    }

    public function testGetMustReturnHateOASLinks()
    {
        // given
        $mockedGuzzle = $this->getMockedGuzzle();
        Hexon::setGuzzleClient($mockedGuzzle);

        // perform
        Hexon::enableHateOASLinks();
        /** @var Advertisers $test */
        $test = Hexon::advertisers();
        $test->get();

        // assertion
        $mockedGuzzle->shouldHaveReceived('request')->withArgs([
            Mockery::any(),
            Mockery::any(),
            Mockery::on(function ($options) {
                $this->assertRequestOptionsLinks($options, true);

                return true;
            }),
        ])->once();
    }

    public function testMustEnableAndDisableHateOASLinks()
    {
        // given
        $mockedGuzzle = $this->getMockedGuzzle();
        Hexon::setGuzzleClient($mockedGuzzle);
        Hexon::enableHateOASLinks();

        // perform
        Hexon::disableHateOASLinks();
        /** @var Advertisers $test */
        $test = Hexon::advertisers();
        $test->get();

        // assertion
        $mockedGuzzle->shouldHaveReceived('request')->withArgs([
            Mockery::any(),
            Mockery::any(),
            Mockery::on(function ($options) {
                $this->assertRequestOptionsLinks($options, false);

                return true;
            }),
        ])->once();
    }

    private function assertRequestOptionsLinks(array $options, bool $requestLinks)
    {
        $this->assertArrayHasKey('query', $options);
        $query = Arr::get($options, 'query', []);
        $this->assertArrayHasKey('_LINKS', $query);
        $this->assertEquals($requestLinks, Arr::get($query, '_LINKS'));
    }

    /**
     * @dataProvider languageProvider
     */
    public function testMustSendAcceptLanguage(string $expectedHeader, string $lang = null)
    {
        // given
        $mockedGuzzle = $this->getMockedGuzzle();
        Hexon::setGuzzleClient($mockedGuzzle);
        App::setLocale($lang);

        // perform
        /** @var Advertisers $test */
        $test = Hexon::advertisers();
        $test->get();

        // assertion
        $mockedGuzzle->shouldHaveReceived('request')->withArgs([
            Mockery::any(),
            Mockery::any(),
            Mockery::on(function ($options) use ($expectedHeader) {
                $this->assertArrayHasKey('headers', $options);
                $headers = Arr::get($options, 'headers', []);
                $this->assertArrayHasKey('Accept-Language', $headers);
                $this->assertEquals($expectedHeader, Arr::get($headers, 'Accept-Language'));

                return true;
            }),
        ])->once();
    }

    public function languageProvider(): array
    {
        return [
            ['pt,en', 'pt'],
            ['en', null],
            ['en', 'en'],
            ['nl,en', 'nl'],
        ];
    }

    public function getMockedGuzzle()
    {
        $mockedGuzzle = Mockery::spy(ClientInterface::class);

        $response = new Response(200, [], json_encode([
            'results' => [], 'errors' => [], 'debugs' => [], 'warnings' => [],
        ]));

        $mockedGuzzle->shouldReceive('request')->withArgs([
            Mockery::any(),
            Mockery::any(),
            Mockery::any(),
        ])->andReturn($response);

        return $mockedGuzzle;
    }
}
