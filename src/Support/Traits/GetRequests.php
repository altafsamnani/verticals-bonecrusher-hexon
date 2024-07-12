<?php
/**
 * @author André Aleixo <andre.aleixo@olx.com>
 * @copyright 2017 Naspers Classifieds
 */
namespace Bonecrusher\Hexon\Support\Traits;

/**
 * @codeCoverageIgnore
 */
trait GetRequests
{
    public function get()
    {
        return $this->doRequest('GET');
    }

    public function update(array $payload = [])
    {
        return $this->doRequest('PUT', $payload);
    }

    public function create(array $payload = [])
    {
        return $this->doRequest('POST', $payload);
    }

    public function delete()
    {
        return $this->doRequest('DELETE');
    }
}
