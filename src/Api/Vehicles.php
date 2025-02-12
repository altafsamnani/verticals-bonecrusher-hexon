<?php
namespace Bonecrusher\Hexon\Api;

use Bonecrusher\Hexon\Hexon;
use Bonecrusher\Hexon\Support\Traits\{GetRequests, GlobalRequests};

class Vehicles extends Hexon
{
    use GetRequests, GlobalRequests;

    public $client_id = 'The id of the advertiser this object belongs to';
    public $stocknumber = 'The unique identifier for this object, this unique key may be supplied on creation and cannot be changed.';
    public $referencenumber = 'A reference number that may be shown on portals';
    public $licence_plate = 'The licence plate text for the object without formatting';
    public $vin = 'The vehicle identification number of the object. Will only be publicly advertised upon specific request.';
    public $category = 'The category of the given object, you can find the applicable categories in the vehiclecategory resource.';
    public $bodystyle = 'Bodystyle or type, please see the bodystyle resource for all the available bodystyles.';
    public $make_id = 'The make ID of the item (see the make resource)';
    public $make = 'The make or brand of the object';
    public $model = 'Model of the given object, only applicable for the category cars and vans.';
    public $type = 'The type of the given object';
    public $remarks = 'Remarks. Rich text is possible using the HexonCode markup language.';
    public $remarks_trade = 'Trade remarks. Rich text is possible using the HexonCode markup language.';
    public $default_remark = 'The default advertiserremark that is set for this object';
    public $mfr_warranty_date = 'The date on which the manufacturer warranty on the object expires (Only applicable for occasions)';
    public $mfr_warranty_months = 'The number of months the manufacturer provides warranty. (Only applicable for new vehicles)';
    public $mfr_warranty_kms = 'The limit upper limit for the manufacturer warranty to be applicable (in Kilometers).';
    public $bovag_warranty = 'Bovag warranty for the object, in months.';
    public $warrantylabel_dealer_id = 'Code from the dealer warranty label, the code can be found in dealerwarrantylabel';
    public $warrantylabel_make_id = 'Code from the brand warranty label, the code can be found in makewarrantylabel';
    public $warranty_months = 'The number of months the warranty is applicable';
    public $warranty_km = 'The number of kilometers the warranty is applicable';
    public $warranty_remarks = 'Extra description for the warranty';
    public $apk_date = 'The date on which the APK for this object will expire';
    public $apk_delivery = 'Will the object be receiving a new APK validation upon deliver?';
    public $registration_first = 'The date on which this object reveived its first registration (Datum Eerste Toelating).';
    public $registration_part1 = 'The date on which this object received its first registration in the country where it\'s currently registered (Dutch: datum eerste inschrijving in Nederland).';
    public $registration_part2 = 'The date of the last ownership change (Dutch: datum tenaamstelling).';
    public $odometer = 'The number the odometer in the object (if any) has';
    public $odometer_unit = 'The unit the odometer is displaying in';
    public $used = 'Indicates if the object has been used (true) or is new (false)';
    public $previous_owners = 'The number of previous owners of the object';
    public $demo = 'Indicates that the objects only utilisation so far was for demonstration purposes';
    public $expected = 'Indicates that the objects is not in stock yet but expected';
    public $damage = 'The severity of the damage to the object (if applicable)';
    public $damage_remarks = 'Remarks in addition to the damage indication explaining the extent of the damage.';
    public $bpm_amount = 'The BPM part of the price of the object';
    public $margin = 'Does this vehicle apply for the margin VAT scheme?';
    public $costs_predelivery = 'Additional costs to prepare the vehicle for delivery (Dutch: Kosten Rijklaar maken)';
    public $costs_repair = 'Costs to repair the vehicle to make it roadworthy again';
    public $price_b2c = 'The B2C price for the consumer';
    public $price_b2c_vat = 'Is the VAT (BTW) included in the price? If not included defaults to TRUE';
    public $price_b2c_bpm = 'Is the BPM included in the price? If not included defaults to TRUE';
    public $price_discount = 'The B2C price for the consumer';
    public $price_discount_vat = 'Is the VAT (BTW) included in the price?';
    public $price_discount_bpm = 'Is the BPM included in the price?';
    public $price_b2b = 'The B2C price for the consumer';
    public $price_b2b_vat = 'Is the VAT (BTW) included in the price? If not included defaults to TRUE';
    public $price_b2b_bpm = 'Is the BPM included in the price? If not included defaults to TRUE';
    public $price_takeaway = 'The B2C price for the consumer';
    public $price_takeaway_vat = 'Is the VAT (BTW) included in the price? If not included defaults to TRUE';
    public $price_takeaway_bpm = 'Is the BPM included in the price? If not included defaults to TRUE';
    public $price_export = 'The B2C price for the consumer';
    public $price_export_vat = 'Is the VAT (BTW) included in the price? If not included defaults to TRUE';
    public $cilinders = 'The number of cylinders the engine of the object has';
    public $displacement = 'The engine displacement volume of the engine in CC';
    public $power = 'The engine power';
    public $power_unit = 'The engine power';
    public $gears = 'The number of gears the transmission of the object has';
    public $transmission = 'Transmission type for the object';
    public $acceleration = 'The acceleration of the object, time it takes to get from 0 to 100 km/h';
    public $topspeed = 'The top speed the object can achieve, in km/h';
    public $fuel_consumption_avg = 'Average fuel consumption in liter per 100 km';
    public $fuel_consumption_city = 'City fuel consumption in liter per 100 km';
    public $fuel_consumption_highway = 'Highway fuel consumption in liter per 100 km';
    public $fuel_tank_capacity = 'The maximum capacity if the fuel tank in liters';
    public $fuel_type = 'The fuel required for the engine to operate.';
    public $energylabel = 'European Union energy label the object received.';
    public $emission_co2 = 'The CO2 emission in g/km';
    public $emission_particulates = 'The particulates emission in mg/km.';
    public $door_count = 'The number of doors the object has';
    public $seats = 'The number of seats this object provides for passengers and driver.';
    public $axles_count = 'The number of axles the object has';
    public $axles_powered = 'The number of powered_axles the object has';
    public $width = 'The width of the object in CM';
    public $height = 'The height of the object in CM';
    public $length = 'The length of the object in CM';
    public $wheelbase = 'The wheelbase of the object in CM';
    public $cargo_width = 'Width of the cargo space in CM';
    public $cargo_height = 'Height of the cargo space in CM';
    public $cargo_length = 'Length of the cargo space in CM';
    public $mass_empty = 'The empty mass of the object, measured in kilograms';
    public $payload = 'Maximum payload for the object, in KG';
    public $gvw = 'The gross vehicle weight rating, maximum operating weight/mass of the object';
    public $trailer_load_braked = 'Max trailer load braked';
    public $trailer_load_unbraked = 'Max trailer load unbraked';
    public $colour_base = 'The base color of the object';
    public $colour_factory = 'The factory color description';
    public $colour_tint = 'The tint of the color';
    public $colour_painttype = 'The paint type used on the object';
    public $colour_interior = 'The colour the interior of the object has (seats, lining, etc)';
    public $upholstery = 'The material the upholstery of the object is made of.';
    public $title = 'Title for the object';
    public $highlights = 'Highlights for the object';
    public $search_terms = 'A list of search terms for the object, separated with spaces.';
    public $direct_link = 'Direct link to the vehicle';
    public $video_links = 'One or more urls to videos about this vehicle';
    public $accessories = 'List of accessories that are available on this object the key may be the group the accesoire belongs to, the value is the full description.';
    public $sites = 'Sites where this object should be published on, check the site model for a list of applicable site codes';
    public $window_sticker_link = 'A direct link to the window sticker of this vehicle';

}
