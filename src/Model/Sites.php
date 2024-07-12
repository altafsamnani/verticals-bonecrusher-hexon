<?php
namespace Bonecrusher\Hexon\Model;

use Bonecrusher\Hexon\Support\Traits\GlobalRequests;

class Sites
{
    use GlobalRequests;

    public $code;
    public $url;
    public $signup_url;
    public $info_url;
    public $leads;
    public $vehicle_categories;
    public $name;
    public $short_description;
    public $long_description;
    public $status;
    public $logo;
}
