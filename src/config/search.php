<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Version
    |--------------------------------------------------------------------------
    |
    | Version of package
    |
    */

    'version' => '0.1.1',

    /*
    |--------------------------------------------------------------------------
    | Version of ELF CMS Basic
    |--------------------------------------------------------------------------
    |
    | Minimum version of ELF CMS Basic package
    |
    */

    'basic_package' => '1.4.4',

    /*
    |--------------------------------------------------------------------------
    | Menu data
    |--------------------------------------------------------------------------
    |
    | Menu data of this package for admin panel
    |
    */

    "menu" => [
        [
            "title" => "Search",
            "lang_title" => "search::elf.search",
            "route" => "admin.search.items",
            "parent_route" => "admin.search.items",
            "icon" => "/vendor/elfcms/search/admin/images/icons/search.png",
            "position" => 90,
            "submenu" => []
        ],
    ],

    /* 'components' => [
        'Search' => [
            'class' => '\Elfcms\Search\View\Components\Search',
            'options' => [
                'item' => false,
                'theme' => 'default',
            ],
        ],
    ], */
];
