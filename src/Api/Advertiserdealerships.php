<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class AdvertiserDealerships extends Hexon
{
    use GetRequests, GlobalRequests;

    public $client_id = 'The id of the advertiser';
    public $make_id = 'On which item from the make resource this warranty is applicable, 0 means ALL brands';
    public $category = 'Which of the vehiclecategory this dealership is applicable to.';
}
