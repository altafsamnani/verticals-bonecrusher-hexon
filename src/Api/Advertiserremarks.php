<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class AdvertiserRemarks extends Hexon
{
    use GetRequests, GlobalRequests;

    public $client_id = 'The related advertiser';
    public $nr = 'Index number for the remark';
    public $remark = 'The standard remark text';
}
