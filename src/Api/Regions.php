<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class Regions extends Hexon
{
    use GetRequests, GlobalRequests;

    public $country_code = 'Reference to the country code, can be found in country';
    public $region_code = 'Region code unique for this country.';
    public $name = 'Name of the given region';
}
