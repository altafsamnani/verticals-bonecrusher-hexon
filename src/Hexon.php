<?php
namespace Bonecrusher\Hexon;

use Bonecrusher\Hexon\Response\Response;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Illuminate\Support\Facades\App;

abstract class Hexon
{
    /** @var Client */
    protected $guzzle;

    /** @var Environment */
    protected $environment;

    /** @var array */
    protected static $select;

    /** @var string */
    protected $endpoint;

    /** @var bool  */
    protected static $hateOASLinks = false;

    /** @var ClientInterface|null */
    protected static $staticGuzzle;

    public function __construct(string $endpoint)
    {
        // TODO Check auth method
        $this->environment = new Environment();
        $this->endpoint = $endpoint;
        $this->initGuzzleClient();
    }

    public static function setGuzzleClient(ClientInterface $client)
    {
        self::$staticGuzzle = $client;
    }

    public static function enableHateOASLinks()
    {
        self::$hateOASLinks = true;
    }

    public static function disableHateOASLinks()
    {
        self::$hateOASLinks = false;
    }

    public static function getDefinition(string $name)
    {
        $className = self::getModelClass($name);
        if (class_exists($className)) {
            return (new $className())->definition();
        }
        throw new \Exception("Definition for {$name} not found");
    }

    public static function __callStatic(string $name, array $args = [])
    {
        $className = self::getApiClass($name);

        if (class_exists($className)) {
            $suffixValue = (empty($args) ? 'collection' : 'single');

            $endPoint =  config('hexon.api.prefix') .
                config('hexon.api.suffix.' . $name . '.' . $suffixValue) . '/' .
                (empty($args) ? '' : $args[0]);

            if (!is_array(config('hexon.api.suffix.' . $name))) {
                $endPoint = config('hexon.api.suffix.' . $name);
            }

            return new $className($endPoint);
        }

        throw new \Exception("Method {$name} is not available");
    }

    protected static function getApiClass($className)
    {
        return 'Bonecrusher\\Hexon\\Api\\' . ucfirst($className);
    }

    protected static function getModelClass($className)
    {
        return 'Bonecrusher\\Hexon\\Model\\' . ucfirst($className);
    }

    /**
     * @param string $method
     * @param string $endpoint
     * @param array $request
     * @return string
     */
    protected function doRequest(string $method, array $request = [], string $endpoint = '')
    {
        $guzzleOptions = [
            'query' => [
                '_LINKS' => self::$hateOASLinks,
            ],
            'headers' => [
                'Accept-Language' => $this->getAcceptLanguage()
            ]
        ];

        if (empty($endpoint)) {
            $endpoint = $this->endpoint;
        }

        switch ($method) {
            case 'POST':
            case 'PUT':
                $guzzleOptions['json'] = $request;
                break;
            case 'GET':
                // Don't apply request array
            default:
                $guzzleOptions['form_params'] = $request;
                break;
        }

        $guzzleRequest = $this->guzzle->request(
            $method,
            $endpoint,
            $guzzleOptions
        );

        $response = json_decode($guzzleRequest->getBody()->getContents());

        if ($method == "DELETE") {
            return new Response($guzzleRequest->getStatusCode(), []);
        } else {
            $result = isset($response->results) ? $response->results : $response->result;
            return new Response(
                $guzzleRequest->getStatusCode(),
                $result,
                $response->errors,
                $response->_links ?? [],
                $response->debugs,
                $response->warnings
            );
        }
    }

    private function getAcceptLanguage(): string
    {
        $locale = App::getLocale();

        if ($locale === 'en' || $locale === null) {
            return 'en';
        }

        return $locale . ',en';
    }

    private function initGuzzleClient()
    {
        if (self::$staticGuzzle !== null) {
            $this->guzzle = self::$staticGuzzle;
            return;
        }

        $this->guzzle = new Client([
            'base_uri' => $this->environment->getUrl(),
            'auth' => [
                $this->environment->getAuthUser(),
                $this->environment->getAuthPass(),
                $this->environment->getAuthType()
            ]
        ]);
    }
}
