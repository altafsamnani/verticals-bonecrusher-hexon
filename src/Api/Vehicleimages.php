<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class VehicleImages extends Hexon
{
    use GetRequests, GlobalRequests;

    public $client_id = 'The id of the advertiser';
    public $stocknumber = 'The id of the vehicle.';
    public $nr = 'The image sequence number. If not supplied defaults to the current max + 1.';
    public $image_url = 'The URL of the image. The image will be copied to the Hexon servers. This URL is for private use only.';
    public $height = 'The height in pixels of the original uploaded file.';
    public $width = 'The width in pixels of the original uploaded file.';
    public $size = 'File size (in bytes) of the originally uploaded image.';
    public $filename = 'The original filename of this image.';
    public $description = 'An optional description of the image.';
    public $overlay_code_portals = 'The vehicleimageoverlay to be used when advertising this image on portals';
    public $overlay_code_website = 'The vehicleimageoverlay to be used when advertising this image on the website of the advertiser';
}
