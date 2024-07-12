<?php

return [

    /*
     |--------------------------------------------------------------------------
     | Hexon Settings
     |--------------------------------------------------------------------------
     |
     | Default is by default develop
     | Options are: develop, production
     |
     */
    'default' => env('INTEGRATOR_HEXON_ENV', 'develop'),

    'environment'  => [
        'develop' => [
            'url' => env('INTEGRATOR_HEXON_URL'),


            /*
             |--------------------------------------------------------------------------
             | Hexon Auth Details
             |--------------------------------------------------------------------------
             |
             | type: basic, digest, null to disable authentication
             |
             */
            'auth' => [
                'user' => env('INTEGRATOR_HEXON_AUTH_USER'),
                'pass' => env('INTEGRATOR_HEXON_AUTH_PASS'),
                'type' => env('INTEGRATOR_HEXON_AUTH_TYPE'),
            ]
        ],
    ],

    'api' => [
        'prefix' => '/olx/api/v1/rest/',
        'suffix' => [
            'accounts' => [
                'single' => 'account',
                'collection' => 'accounts'
            ],
            'accountsettings' => [
                'single' => 'accountsetting',
                'collection' => 'accountsettings'
            ],
            'ads' => [
                'single' => 'ad',
                'collection' => 'ads'
            ],
            'adtransactions' => [
                'single' => 'adtransaction',
                'collection' => 'adtransactions'
            ],
            'advertiserdealerships' => [
                'single' => 'advertiserdealership',
                'collection' => 'advertiserdealerships'
            ],
            'advertiserdealerwarrantylabels' => [
                'single' => 'advertiserdealerwarrantylabel',
                'collection' => 'advertiserdealerwarrantylabels'
            ],
            'advertiseremployees' => [
                'single' => 'advertiseremployee',
                'collection' => 'advertiseremployees'
            ],
            'advertisermakewarrantylabels' => [
                'single' => 'advertisermakewarrantylabel',
                'collection' => 'advertisermakewarrantylabels'
            ],
            'advertisermemberships' => [
                'single' => 'advertisermembership',
                'collection' => 'advertisermemberships'
            ],
            'advertisermodules' => [
                'single' => 'advertisermodule',
                'collection' => 'advertisermodules'
            ],
            'advertiserremarks' => [
                'single' => 'advertiserremark',
                'collection' => 'advertiserremarks'
            ],
            'advertisers' => [
                'single' => 'advertiser',
                'collection' => 'advertisers'
            ],
            'bodystyles' => [
                'single' => 'bodystyle',
                'collection' => 'bodystyles'
            ],
            'contactpersons' => [
                'single' => 'contactperson',
                'collection' => 'contactpersons'
            ],
            'countries' => [
                'single' => 'country',
                'collection' => 'countries'
            ],
            'dealerwarrantylabels' => [
                'single' => 'dealerwarrantylabel',
                'collection' => 'dealerwarrantylabels'
            ],
            'eventsubscriptions' => [
                'single' => 'eventsubscription',
                'collection' => 'eventsubscriptions'
            ],
            'eventtypes' => [
                'single' => 'eventtype',
                'collection' => 'eventtypes'
            ],
            'makes' => [
                'single' => 'make',
                'collection' => 'makes'
            ],
            'makewarrantylabels' => [
                'single' => 'makewarrantylabel',
                'collection' => 'makewarrantylabels'
            ],
            'memberships' => [
                'single' => 'membership',
                'collection' => 'memberships'
            ],
            'modules' => [
                'single' => 'module',
                'collection' => 'modules'
            ],
            'regions' => [
                'single' => 'region',
                'collection' => 'regions'
            ],
            'siteactions' => [
                'single' => 'siteaction',
                'collection' => 'siteactions'
            ],
            'siteconversiontrees' => [
                'single' => 'siteconversiontree',
                'collection' => 'siteconversiontrees'
            ],
            'sites' => [
                'single' => 'site',
                'collection' => 'sites'
            ],
            'sitesettings' => [
                'single' => 'sitesetting',
                'collection' => 'sitesettings'
            ],
            'supportcallcomments' => [
                'single' => 'supportcallcomment',
                'collection' => 'supportcallcomments'
            ],
            'supportcallfiles' => [
                'single' => 'supportcallfile',
                'collection' => 'supportcallfiles'
            ],
            'supportcalls' => [
                'single' => 'supportcall',
                'collection' => 'supportcalls'
            ],
            'supportcallvehicles' => [
                'single' => 'supportcallvehicle',
                'collection' => 'supportcallvehicles'
            ],
            'userssettings' => [
                'single' => 'users_setting',
                'collection' => 'users_settings'
            ],
            'vehiclecategories' => [
                'single' => 'vehiclecategory',
                'collection' => 'vehiclecategories'
            ],
            'vehicleimageoverlayresolutions' => [
                'single' => 'vehicleimageoverlayresolution',
                'collection' => 'vehicleimageoverlayresolutions'
            ],
            'vehicleimageoverlays' => [
                'single' => 'vehicleimageoverlay',
                'collection' => 'vehicleimageoverlays'
            ],
            'vehicleimages' => [
                'single' => 'vehicleimage',
                'collection' => 'vehicleimages'
            ],
            'vehicles' => [
                'single' => 'vehicle',
                'collection' => 'vehicles'
            ],
            'importLink' => 'http://test.import.doorlinkenvoorraad.nl/traduspro',
        ]
    ]
];
