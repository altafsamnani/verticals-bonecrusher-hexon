<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class Countries extends Hexon
{
    use GetRequests, GlobalRequests;

    public $iso_code = 'ISO-3166-1 alpha-2 code of the country';
    public $name = 'Name of the country';
}
