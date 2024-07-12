<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class AdvertiserModules extends Hexon
{
    use GetRequests, GlobalRequests;

    public $client_id = 'The id of the advertiser';
    public $module_code = 'The name of the module';
    public $module_subcode = 'The subcode of the module';
    public $params = 'Parameters that are required with the given module, see modules for a list of required per module.';
    public $properties = 'Properties that are present on this advertisermodule';
}
