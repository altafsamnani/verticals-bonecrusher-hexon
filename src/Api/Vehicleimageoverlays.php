<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class VehicleImageOverlays extends Hexon
{
    use GetRequests, GlobalRequests;

    public $client_id = 'ID of the related advertiser';
    public $code = 'The code of this overlay';
    public $description = 'Description of this overlay';
    public $image_url = 'If supplied, vehicleimageoverlayresolutions will be automatically generated.';
}
