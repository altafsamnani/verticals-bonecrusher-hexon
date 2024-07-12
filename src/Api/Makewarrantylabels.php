<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class MakeWarrantyLabels extends Hexon
{
    use GetRequests, GlobalRequests;

    public $id = 'Id';
    public $make_id = 'The manufacturer or importer that introduced this label (see make). Only dealers of this make can use this label.';
    public $name = 'Name of the warranty label';
    public $applicable_all_makes = 'Is this warranty label applicable on all makes (thus, also "foreign" makes) or only the make of the manufacturer or importer that introduced this label?';
}
