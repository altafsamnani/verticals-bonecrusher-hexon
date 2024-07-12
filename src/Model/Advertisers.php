<?php
namespace Bonecrusher\Hexon\Model;

use Bonecrusher\Hexon\Support\Traits\GlobalRequests;

class Advertisers
{
    use GlobalRequests;

    public $id;
    public $name;
    public $street;
    public $housenumber;
    public $housenumber_ext;
    public $postal_code;
    public $city;
    public $region;
    public $country;
    public $telephone;
    public $fax;
    public $email;
    public $website;
    public $site_code_website_provider;
    public $advertiser_type;
    public $password;
    public $creation_date;
    public $payment_overdue;
}
