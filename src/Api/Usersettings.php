<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class UserSettings extends Hexon
{
    use GetRequests, GlobalRequests;

    public $user = 'User';
    public $wagl_endpoint = 'URL that is called when the system needs permission to perform a paid action, or to return the results';
    public $wagl_version = 'The protocol version used when communicating with the WAGL endpoint';
}
