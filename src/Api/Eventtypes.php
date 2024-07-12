<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class EventTypes extends Hexon
{
    use GetRequests, GlobalRequests;

    public $code = 'Code';
    public $description = 'Description';
    public $fields = 'List of the various data fields within this type of event';
    public $default_fields = 'Default set of fields that will be sent when subscribing to this type of event';
    public $optional_filters = 'Optional extra filters that can be set for this type of event';
}
