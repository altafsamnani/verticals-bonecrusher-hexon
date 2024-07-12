<?php
namespace Bonecrusher\Hexon\Model;

use Bonecrusher\Hexon\Support\Traits\GlobalRequests;

class Vehicleimages
{
    use GlobalRequests;

    public $client_id;
    public $stocknumber;
    public $nr;
    public $image_url;
    public $height;
    public $width;
    public $size;
    public $filename;
    public $description;
    public $overlay_code_portals;
    public $overlay_code_website;
}
