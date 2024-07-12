<?php
namespace Bonecrusher\Hexon\Model;

use Bonecrusher\Hexon\Support\Traits\GlobalRequests;

class Ads
{
    use GlobalRequests;

    public $client_id;
    public $site_code;
    public $stocknumber;
    public $errors;
    public $warnings;
    public $advertised_url;
    public $site_ad_id;
    public $first_added;
    public $last_added;
    public $last_removed;
    public $last_updated;
    public $outstanding_action;
    public $advertised;
    public $selected;
    public $status_message;
    public $data;
    public $conversion_trees;
    public $extra_information;
}
