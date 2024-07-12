<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class AdvertiserEmployees extends Hexon
{
    use GetRequests, GlobalRequests;

    public $client_id = 'The id of the advertiser';
    public $id = 'The unique id of this employee.';
    public $initials = 'Initials';
    public $first_name = 'First name';
    public $infix = 'In fix';
    public $last_name = 'Last name';
    public $telephone = 'The (direct) phone number';
    public $mobile = 'The mobile phone number';
    public $primary_language = 'The primary language this employee speaks';
    public $languages = 'All the languages this employee speaks';
    public $email = 'Email';
}
