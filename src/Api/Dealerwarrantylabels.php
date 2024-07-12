<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class DealerWarrantyLabels extends Hexon
{
    use GetRequests, GlobalRequests;

    public $warranty_id = 'The warranty id';
    public $name = 'Name of the warranty label';
}
