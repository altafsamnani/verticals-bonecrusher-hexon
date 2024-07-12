<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class AdTransactions extends Hexon
{
    use GetRequests, GlobalRequests;

    public $id = 'Unique identifier of the transaction';
    public $state = 'ENUM => pending, started, finished, revoked';
    public $recurring_payments = 'false for one-time-only transactions, true for actions with recurring payments';
    public $client_id = 'The id of the advertiser this transaction applies to';
    public $site_code = 'The id of the site this transaction applies to';
    public $action = 'The type of action that was performed';
    public $stocknumber = 'The stocknumber of the vehicle this transaction applies to';
    public $site_ad_id = 'The id of the ad at the site.';
    public $purchase_reference = 'An optional reference number of id that the site might include on the purchasing order or invoice.';
    public $stamp_started = 'The date and time when the action has started';
    public $stamp_stopped = 'The date and time when the action has finished (always equal to stamp_started for one-time-only transactions)';
    public $ad_title = 'The title of the ad';
}
