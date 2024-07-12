<?php
/**
 * @author Renato Marinho <renato.marinho@olx.com>
 * @copyright 2017 Naspers Classifieds
 */
namespace Bonecrusher\Hexon\Support\Traits;

/**
 * @codeCoverageIgnore
 */
trait GlobalRequests
{
    public function __call(string $name, array $args = [])
    {
        if (!empty($args)) {
            throw new \Exception("Method {$name} does not accept any arguments.");
        }

        $endpoint = $this->endpoint . '/' . $name . '/';
        $class = self::getApiClass($name);
        return new $class($endpoint);
    }

    public function select(array $args=[])
    {
        self::$select = $args;
        return $this;
    }

    public function definition()
    {
        return get_object_vars($this);
    }
}
