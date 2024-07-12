<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class EventSubscriptions extends Hexon
{
    use GetRequests, GlobalRequests;

    public $id = 'Unique identifier of this subscription. If not supplied when creating a subscription one will be created automatically.';
    public $event_code = 'The eventtypes you\'d like to receive.';
    public $filter_site_code = 'The site you\'d like to receive events for (if applicable). If not specified events for all sites will trigger.';
    public $filter_client_id = 'The advertiser you\'d like to receive events for (if applicable). If not specified events for all advertisers will trigger.';
    public $filter_vehicle_stocknumber = 'The vehicle you\'d like to receive events for (if applicable). If not specified events for all vehicles will trigger.';
    public $extra_filters = 'Additional filters.';
    public $subscription_endpoint = 'URL that is called each time the event triggers.';
    public $hmac_key = 'Key used to sign the payload data. See "Performing authentication and data integrity checks".';
    public $fields = 'Fields that should be included on the callback, see eventtype for more information on available fields. If not supplied the default set will be used.';
}
