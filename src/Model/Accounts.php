<?php
namespace Bonecrusher\Hexon\Model;

use Bonecrusher\Hexon\Support\Traits\GlobalRequests;

class Accounts
{
    use GlobalRequests;

    public $client;
    public $site_code;
    public $permission_site;
    public $permission_reseller;
    public $hold_all_actions;
    public $site_account_id;
    public $activation_link;
    public $admin_link;
}
