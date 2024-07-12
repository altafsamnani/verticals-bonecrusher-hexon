<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class Advertisers extends Hexon
{
    use GetRequests, GlobalRequests;

    public $id = 'A string that uniquely identifies this client, for instance a client number or GUID';
    public $name = 'The full company name of the client';
    public $street = 'Street';
    public $housenumber = 'House number';
    public $housenumber_ext = 'Optional extension to the number part of the housenumber';
    public $postal_code = 'Postal code';
    public $city = 'City';
    public $region = 'The region code';
    public $country = 'The ISO-3166-1 alpha-2 code of the country';
    public $telephone = 'Telephone';
    public $fax = 'Fax';
    public $email = 'Email';
    public $website = 'Website';
    public $payment_overdue = 'The value indicates the level of restriction this client has. mild means that only externally purchased products are disabled. severe means all services are disabled.';
    public $site_code_website_provider = 'The site that is used to populate the website of this advertiser with ads. It enables the system to determine the URL of a vehicle on the website of the advertiser, which can be used by other sites to create deeplinks.';
    public $advertiser_type = 'The type of vehicle this client usually sells. It\s mainly for administrative purposes. A client that sells cars can still advertise boats for example.';
    public $password = 'Password needed to gain access to https://www.doorlinkenvoorraad.nl/ and in some cases to be able to send vehicle data to Hexon.';
    public $creation_date = 'Stamp that is set during the creation of the item record, cannot be changed.';
}
