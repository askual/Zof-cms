<?php

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Askual Tech", // set false to total remove
            'description'  => "A software development company from Ethiopia", // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ["Ethiopia","Software development","Askual","Askual Tech","Askual Technologies","Mobile app development","Android app development","Web design and development"],
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
        ],

        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Askual Tech', // set false to total remove
            'description' => 'Askual Technologies', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => "Askual Tech",
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
          //'card'        => 'summary',
          'site'        => '@askualTech',
        ],
    ],
];
