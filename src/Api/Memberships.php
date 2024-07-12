<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class Memberships extends Hexon
{
    use GetRequests, GlobalRequests;

    public $code = 'Code';
    public $name = 'Name of the given membership';
    public $description = 'Description of the given membership';
    public $nr_needed = 'Denotes if a membership number is required when adding this type of membership';
}
