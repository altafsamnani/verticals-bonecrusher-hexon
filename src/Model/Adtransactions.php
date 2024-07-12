<?php
namespace Bonecrusher\Hexon\Model;

use Bonecrusher\Hexon\Support\Traits\GlobalRequests;

class Adtransactions
{
    use GlobalRequests;

    public $id;
    public $state;
    public $recurring_payments;
    public $client_id;
    public $site_code;
    public $action;
    public $stocknumber;
    public $site_ad_id;
    public $purchase_reference;
    public $stamp_started;
    public $stamp_stopped;
    public $ad_title;
}
