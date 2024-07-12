<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class ContactPersons extends Hexon
{
    use GetRequests, GlobalRequests;

    public $contact_id = 'The contact id';
    public $first_name = 'The first name';
    public $infix = 'The infix';
    public $last_name = 'The last name';
}
