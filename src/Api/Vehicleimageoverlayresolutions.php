<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class VehicleImageOverlayResolutions extends Hexon
{
    use GetRequests, GlobalRequests;

    public $client_id = 'ID of the related advertiser';
    public $code = 'The numeric set key the image belongs to';
    public $resolution = 'Resolution of the image';
    public $filename = 'Name of the uploaded file';
    public $created = 'Creation time of the image';
    public $filetype = 'File type';
    public $image_url = 'The URL of the overlay image. The image will be copied to the Hexon servers. This URL is for private use only.';
}
