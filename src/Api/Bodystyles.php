<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class BodyStyles extends Hexon
{
    use GetRequests, GlobalRequests;

    public $id = 'Unique Identifier';
    public $category = 'The main category';
    public $status = 'When deprecated this bodystyle is scheduled for removal in the future.';
    public $bodystyle = 'The style the body of the object has';
}
