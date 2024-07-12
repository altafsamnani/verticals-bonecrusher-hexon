<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class Accounts extends Hexon
{
    use GetRequests, GlobalRequests;

    public $client = 'The id of the advertiser';
    public $site_code = 'The code of the site';
    public $permission_site = 'Hexon will only send vehicles to a site if the site has given permission to do so';
    public $permission_reseller = 'Hexon will only send vehicles to site if the reseller has given permission to do so';
    public $hold_all_actions = 'No ads will be added, changed or deleted as long as hold_all_actions is true (the link is effectively paused)';
    public $site_account_id = 'Identifier of this account on the site';
    public $activation_link = 'URL where advertiser needs to complete the activation process (if applicable)';
    public $admin_link = 'URL where advertiser can perform administrative tasks on the site';

    public function unlink()
    {
        $this->preProcessRequest();

        return $this->doRequest('POST');
    }

    public function get()
    {
        $this->preProcessRequest();

        return $this->doRequest('GET');
    }

    private function preProcessRequest()
    {
        // This operation is executed against the collection and not the single (as this has args)
        $single = config('hexon.api.suffix.accounts.single');
        $collection = config('hexon.api.suffix.accounts.collection');

        // As parse_url has a bug reported in https://github.com/guzzle/guzzle/issues/1550
        $this->endpoint = $this->environment->getUrl().str_replace($single, $collection, $this->endpoint);
    }
}
