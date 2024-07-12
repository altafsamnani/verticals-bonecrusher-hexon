<?php
/**
 * @author André Aleixo <andre.aleixo@olx.com>
 * @copyright 2017 Naspers Classifieds
 */
namespace Bonecrusher\Hexon\Response;

class XMLResponse extends Response
{
    public function __construct($statusCode, $results, $errors = null, $links = null, $debugs = null, $warnings = null)
    {
        $this->statusCode = $statusCode;
        $this->links = $links;
        $this->debugs = $debugs;
        $this->errors = $errors;
        $this->warnings = $warnings;
        $this->results = simplexml_load_string($results);
    }
}
