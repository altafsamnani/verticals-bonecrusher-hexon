<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class Ads extends Hexon
{
    use GetRequests, GlobalRequests;

    public $client_id = 'The id of the advertiser.';
    public $site_code = 'The code of the site.';
    public $stocknumber = 'The id of the vehicle.';
    public $errors = 'Zero, one of more error messages regarding the outstanding action. Each error consists of an internal code, a message that shows what wrong and a hint that suggests how to fix the problem. Use the named filter only_errors to filter ads with errors';
    public $warnings = 'Zero, one of more warning messages. Warnings tell the advertiser that the ad can be improved.';
    public $advertised_url = 'Deeplink of the advertised ad on the site, if known.';
    public $site_ad_id = 'The id of the ad at the site, if known.';
    public $first_added = 'Date and time when this ad was first advertised on the site.';
    public $last_added = 'Date and time when this ad was last advertised on the site. This can differ from first_added when an ad is added, removed and added again.';
    public $last_removed = 'Date and time when this ad was last removed on the site.';
    public $last_updated = 'Date and time when this ad was last updated on the site.';
    public $outstanding_action = 'The current action.';
    public $advertised = 'The current state of the ad at the site.';
    public $selected = 'If the vehicle has been selected by the advertiser to be advertised on the site.';
    public $status_message = 'A short description of the current state of the ad.';
    public $data = 'Various information about the ad. The structure very much depends on the site. In most cases it\'s a list of key-value pairs.';
    public $conversion_trees = 'Configured conversion tree values, see siteconversiontree for the available items in this field.';
    public $extra_information = 'A summary of the available extra information. For instance the current highest bid. Each entry consists of an internal key, a category to group related messages, and the message in both plain text and HTML.';
}
