<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class SiteSettings extends Hexon
{
    use GetRequests, GlobalRequests;

    public $site_code = 'Unique code for the given site from the site resource.';
    public $setting = 'Code for the setting';
    public $setting_name = 'Name of the setting';
    public $setting_description = 'Description of the setting';
    public $data_type = 'Data type of this setting';
    public $default_value = 'Default value if no override is given';
    public $min_value = 'The minimum allowed value';
    public $max_value = 'The maximum allowed value';
    public $min_length = 'The minimum length of the value';
    public $max_length = 'The maximum lengt of the value';
    public $possible_values = 'If the datatype is a set or enum, this array denotes the possible values';
}
