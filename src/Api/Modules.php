<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class Modules extends Hexon
{
    use GetRequests, GlobalRequests;

    public $code = 'The code of this module';
    public $subcode = 'The subcode code of this module';
    public $group = 'A generic group name that the module belongs to';
    public $module = 'The specific module name';
    public $status = 'Products that are obsolete cannot be created but still exist in the system';
    public $params = 'A list of parameters that MUST be supplied when enabling the module for advertiser';
}
