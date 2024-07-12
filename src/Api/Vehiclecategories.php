<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class VehicleCategories extends Hexon
{
    use GetRequests, GlobalRequests;

    public $code = 'Unique category code';
    public $status = 'When deprecated this category is scheduled for removal in the future.';
}
