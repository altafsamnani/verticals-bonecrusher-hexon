<?php
namespace Bonecrusher\Hexon\Model;

use Bonecrusher\Hexon\Support\Traits\GlobalRequests;

class Memberships
{
    use GlobalRequests;

    public $code;
    public $name;
    public $description;
    public $nr_needed;
}
