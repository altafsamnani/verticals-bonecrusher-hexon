<?php

namespace Bonecrusher\Hexon;

use Config;

class Environment
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string (develop, production, staging)
     */
    private $name;

    private $authType;
    private $authUser;
    private $authPass;

    /**
     * Environment constructor.
     * @param string $env
     */
    public function __construct(string $env = 'develop')
    {
        switch ($env) {
            case 'develop':
            case 'production':
                $environment = $env;
                break;
            default:
                throw new \InvalidArgumentException(
                    sprintf("Hexon Environment '%s' not supported", $env));
        }

        // Load configs
        $this->url = config('hexon.environment.' . $environment . '.url');
        $this->name = $environment;
        $this->authUser = config('hexon.environment.' . $environment . '.auth.user');
        $this->authPass = config('hexon.environment.' . $environment . '.auth.pass');
        $this->authType = config('hexon.environment.' . $environment . '.auth.type');
    }

    /**
     * @return string
     */
    public function getEndpoint($name, $args)
    {
        $suffixValue = (empty($args) ? 'collection' : 'single');

        $endPoint =  config('hexon.api.prefix') .
            config('hexon.api.suffix.' . $name . '.' . $suffixValue) . '/' .
            (empty($args) ? '' : $args[0]);

        if ( !is_array(config('hexon.api.suffix.' . $name)) )
        {
            $endPoint = config('hexon.api.suffix.' . $name);
        }
        return $endPoint;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAuthPass()
    {
        return $this->authPass;
    }

    /**
     * @return mixed
     */
    public function getAuthUser()
    {
        return $this->authUser;
    }

    /**
     * @return mixed
     */
    public function getAuthType()
    {
        return $this->authType;
    }
}
