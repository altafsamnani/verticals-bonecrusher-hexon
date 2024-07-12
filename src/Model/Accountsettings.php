<?php
namespace Bonecrusher\Hexon\Model;

use Bonecrusher\Hexon\Support\Traits\GlobalRequests;

class Accountsettings
{
    use GlobalRequests;

    public $client_id;
    public $site_code;
    public $setting_code;
    public $value_string;
    public $value_int;
    public $value_boolean;
    public $value_array;
    public $value_type;
    public $uses_default;
}
