<?php

return [
    'name'        => 'DomainNameAPI',
    'description' => 'With Domainnameapi.com, one of the popular domain name registrars, all domain name transactions can be made instantaneously through the domain API. To do this, define your domainnameapi.com client account information in the following fields.',
    'fields'      => [
        'username'      => 'Reseller ID / API Username',
        'password'      => 'API Key / API Password',
        'test-mode'     => 'Test Mode',
        'adp'           => 'Update pricing automatically',
        'cost-currency' => 'Cost Currency',
        'exclude'       => 'Excluded Extensions',
        'balance'       => 'Balance',
    ],
    'desc'        => [
        'username'      => 'Your Reseller ID (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx) from API Settings in the DomainNameAPI panel connects over REST; a legacy API username connects over SOAP. Your panel login e-mail does not work here.',
        'password'      => 'The API Key of the Reseller ID, or the password of the legacy API username. Leave the mask untouched to keep the saved value.',
        'test-mode'     => 'Activate to process in test mode',
        'adp'           => 'Automatically pulls pricing daily and the price is set at the profit rate',
        'cost-currency' => 'Currency for extension costs the API returns without one.',
        'exclude'       => 'Comma-separated extensions that are never imported or updated, e.g. com.tr,org.tr',
    ],
    'error1'      => 'API information is not available',
    'error2'      => 'Domain and extension information are not present',
    'error8'      => 'Please enter the API information',
    'error10'     => 'An error has occurred',
    'error11'     => "The company name must contain at least two words.",
    'error12'     => "Documents and verification are required before the domain name is activated.",
    'success1'    => 'Settings saved successfully',
];
