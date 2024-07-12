<?php
namespace Bonecrusher\Hexon\Model;

use Bonecrusher\Hexon\Support\Traits\GlobalRequests;

class Siteactions
{
    use GlobalRequests;

    public $site_code;
    public $action_name;
    public $description;
    public $parameter;
    public $duration;
}
