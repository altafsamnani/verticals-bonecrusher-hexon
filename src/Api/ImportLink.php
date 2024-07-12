<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};
use Bonecrusher\Hexon\Response\ImportLinkXMLResponse;
use Illuminate\Support\Facades\Log;

class ImportLink extends Hexon
{
    use GlobalRequests;

    public function postJson(array $payload = [])
    {
        $guzzleOptions = [];
        $guzzleOptions['json'] = $payload;
        $guzzleOptions['timeout'] = 10; // 10 seconds to wait for the server's response
        $guzzleOptions['connect_timeout'] = 3; // 3 seconds to wait for a connected state

        $guzzleRequest = $this->guzzle->request(
            'POST',
            $this->endpoint,
            $guzzleOptions
        );

        /**
         * For this API, the response would be XML WSDL
         * http://www.doorlinkenvoorraad.nl/xml/result.xsd
         */
        return new ImportLinkXMLResponse(
            $guzzleRequest->getStatusCode(),
            (string) $guzzleRequest->getBody()
        );
    }
}
