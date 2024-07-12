<?php
namespace Bonecrusher\Hexon\Model;

use Bonecrusher\Hexon\Support\Traits\GlobalRequests;

class Sitesettings
{
    use GlobalRequests;

    public $site_code;
    public $setting;
    public $setting_name;
    public $setting_description;
    public $data_type;
    public $default_value;
    public $min_value;
    public $max_value;
    public $min_length;
    public $max_length;
    public $possible_values;
}
