<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class SiteActions extends Hexon
{
    use GetRequests, GlobalRequests;

    public $site_code = 'Code of the site';
    public $action_name = 'Name of the promotion';
    public $description = 'Description of the promotion';
    public $parameter = 'Describes if an extra parameter should be given and what it should contain, if no parameter is required this is NULL';
    public $duration = 'The expected processing time for this action.';
}
