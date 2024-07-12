<?php
namespace Bonecrusher\Hexon\Model;

use Bonecrusher\Hexon\Support\Traits\GlobalRequests;

class Eventsubscriptions
{
    use GlobalRequests;

    public $id;
    public $event_code;
    public $filter_site_code;
    public $filter_client_id;
    public $filter_vehicle_stocknumber;
    public $extra_filters;
    public $subscription_endpoint;
    public $hmac_key;
    public $fields;
}
