<?php

return [
    'name'        => 'DomainNameAPI',
    'description' => 'Mit Domainnameapi.com, einem der beliebtesten Domainnamen-Registrare, können alle Domainnamen-Transaktionen sofort über die Domain-API durchgeführt werden. Definieren Sie dazu in den folgenden Feldern Ihre Domainnameapi.com-Kundenkontoinformationen.',
    'fields'      => [
        'username'      => 'Reseller-ID',
        'password'      => 'API-Schlüssel',
        'test-mode'     => 'Testmodus',
        'adp'           => 'Preise automatisch aktualisieren',
        'cost-currency' => 'Kostenwährung',
        'exclude'       => 'Ausgeschlossene Endungen',
        'balance'       => 'Saldo',
    ],
    'desc'        => [
        'username'      => 'Ihre Reseller-ID (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx) aus den API-Einstellungen im DomainNameAPI-Panel. Ihre Panel-Login-E-Mail funktioniert hier nicht.',
        'password'      => 'Der API-Schlüssel der Reseller-ID. Lassen Sie die Maske unverändert, um den gespeicherten Wert zu behalten.',
        'test-mode'     => 'Aktivieren Sie diese Option, um sie im Testmodus zu verarbeiten',
        'adp'           => 'Täglich wird automatisch die Preisgestaltung abgerufen und der Preis wird auf die Gewinnrate festgelegt',
        'cost-currency' => 'Währung für Endungskosten, die die API ohne Währung liefert.',
        'exclude'       => 'Kommagetrennte Endungen, die nie importiert oder aktualisiert werden, z. B. com.tr,org.tr',
    ],
    'error1'      => 'API-Informationen sind nicht verfügbar',
    'error2'      => 'Domain- und Erweiterungsinformationen sind nicht vorhanden',
    'error8'      => 'Bitte geben Sie die API-Informationen ein',
    'error10'     => 'Ein Fehler ist aufgetreten',
    'error11'     => 'Der Firmenname muss mindestens zwei Wörter enthalten.',
    'error12'     => 'Dokumente und Überprüfung sind erforderlich, bevor der Domainname aktiviert wird.',
    'success1'    => 'Einstellungen erfolgreich gespeichert',
];
