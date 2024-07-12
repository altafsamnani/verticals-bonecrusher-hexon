<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class Makes extends Hexon
{
    use GetRequests, GlobalRequests;

    public $id = 'Id';
    public $name = 'Name';
    public $status = 'ENUM => current, deprecated';
}
