<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class SiteConversionTrees extends Hexon
{
    use GetRequests, GlobalRequests;

    public $site_code = 'The related site';
    public $tree_code = 'Code of the tree';
    public $tree = 'The tree contents';
}
