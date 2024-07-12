<?php
/**
 * @author André Aleixo <andre.aleixo@olx.com>
 * @copyright 2017 Naspers Classifieds
 */
namespace Bonecrusher\Hexon\Response;

use Illuminate\Support\Facades\Log;

class ImportLinkXMLResponse extends XMLResponse
{
    /**
     * @var string
     */
    public $error;

    /**
     * @var int
     */
    public $stocknr;

    /**
     * @var int
     */
    public $cid;

    /**
     * @var int
     */
    public $dealerId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $success;

    public function __construct($statusCode, $results, $errors = null , $links = null, $debugs = null, $warnings = null)
    {
        libxml_use_internal_errors(true);
        parent::__construct($statusCode, $results, $errors, $links, $debugs, $warnings);

        try {
            $errors = libxml_get_errors();
            if (!empty($errors)) {
                throw new \Exception("Errors after XML Parse: ".print_r($errors, true));
            }

            // check errors
            if ($this->results->{"error"}) {
                $this->error = (string) $this->results->{"error"};
                $this->success = false;
                return;
            }

            // Parse results object
            $attributes = $this->results->{"mutation"}->attributes();

            $this->stocknr = (int) $attributes->{'stocknr'};
            $this->cid = (int) $attributes->{'cid'};
            $this->dealerId = (int) $attributes->{'dealerId'};
            $this->success = (bool) $attributes->{'success'};
            $this->type = (string) $attributes->{'type'};
        } catch (\Exception $ex) {
            Log::critical("Failed to Parse ImportLink Response. Response: ".print_r($results, true). ". Exception: ".print_r($ex, true));
            throw $ex;
        }
    }
}
