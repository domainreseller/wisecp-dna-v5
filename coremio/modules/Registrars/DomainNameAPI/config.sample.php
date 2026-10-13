<?php

return [
    'meta'     => [
        'name'    => 'DomainNameAPI',
        'version' => '2.0.17',
        'logo'    => 'logo.png',
    ],
    'settings' => [
        'whois-types'      => true,
        'dns-record-types' => [
            'A',
            'AAAA',
            'ALIAS',
            'CAA',
            'CNAME',
            'DS',
            'MX',
            'NAPTR',
            'PTR',
            'SRV',
            'TLSA',
            'TXT',
        ],
        'username'         => '',
        'password'         => '',
        'test-mode'        => 0,
        'adp'              => false,
        'cost-currency'    => 4,
        'exclude'          => '',
    ],
];
