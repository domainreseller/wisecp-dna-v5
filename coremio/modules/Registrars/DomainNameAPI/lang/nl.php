<?php

return [
    'name'        => 'DomainNameAPI',
    'description' => 'Met domainnameapi.com, een van de populaire domeinnaamregistrars, kunnen alle domeinnaamtransacties onmiddellijk worden uitgevoerd via de domein-API. Definieer hiervoor uw domainnameapi.com-clientaccountinformatie in de volgende velden.',
    'fields'      => [
        'username'      => 'Reseller-ID',
        'password'      => 'API-sleutel',
        'test-mode'     => 'Testmodus',
        'adp'           => 'Prijzen automatisch bijwerken',
        'cost-currency' => 'Kostenvaluta',
        'exclude'       => 'Uitgesloten extensies',
        'balance'       => 'Saldo',
    ],
    'desc'        => [
        'username'      => 'Uw Reseller-ID (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx) uit de API-instellingen in het DomainNameAPI-panel. Uw inlog-e-mail van het panel werkt hier niet.',
        'password'      => 'De API-sleutel van de Reseller-ID. Laat het masker ongewijzigd om de opgeslagen waarde te behouden.',
        'test-mode'     => 'Activeren om te verwerken in de testmodus',
        'adp'           => 'Haalt de prijzen dagelijks automatisch op, en de prijs wordt vastgesteld tegen het winstpercentage',
        'cost-currency' => 'Valuta voor extensiekosten die de API zonder valuta teruggeeft.',
        'exclude'       => 'Kommagescheiden extensies die nooit worden geïmporteerd of bijgewerkt, bijv. com.tr,org.tr',
    ],
    'error1'      => 'API-informatie is niet beschikbaar',
    'error2'      => 'Domein- en uitbreidingsinformatie is niet aanwezig',
    'error8'      => 'Voer de API-informatie in',
    'error10'     => 'Er is een fout opgetreden',
    'error11'     => 'De bedrijfsnaam moet uit minstens twee woorden bestaan.',
    'error12'     => 'Documenten en controle zijn vereist voordat de domeinnaam geactiveerd wordt.',
    'success1'    => 'Instellingen met succes opgeslagen',
];
