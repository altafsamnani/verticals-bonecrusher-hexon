<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class AdvertiserMemberships extends Hexon
{
    use GetRequests, GlobalRequests;

    public $client_id = 'The id of the advertiser';
    public $code = 'The membership code as found in membership';
    public $nr = 'The membership number of the membership, in membership shows which memberships require the number to be given.';
    public $validated = 'Indicates if the membership has been validated by a trusted third party.';
}
