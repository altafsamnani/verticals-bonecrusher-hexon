<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class AccountSettings extends Hexon
{
    use GetRequests, GlobalRequests;

    public $client_id = 'The id of the advertiser';
    public $site_code = 'The code of the site';
    public $setting_code = 'The code of the sitesetting';
    public $value_string = 'The string representation of the value (for data types string, text, enum, email and url)';
    public $value_int = 'The integer representation of the value (for data types int and stamp)';
    public $value_boolean = 'The boolean representation of the value (for data type boolean)';
    public $value_array = 'The array representation of the value (for data type set)';
    public $value_type = 'Which of the value_ fields contain the value for this setting or must contain the value when setting it';
    public $uses_default = 'If the setting is currently using the default setting';
}
