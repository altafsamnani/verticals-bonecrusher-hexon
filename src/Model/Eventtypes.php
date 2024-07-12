<?php
namespace Bonecrusher\Hexon\Model;

use Bonecrusher\Hexon\Support\Traits\GlobalRequests;

class Eventtypes
{
    use GlobalRequests;

    public $code;
    public $description;
    public $fields;
    public $default_fields;
    public $optional_filters;
}
