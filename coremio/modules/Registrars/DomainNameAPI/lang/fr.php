<?php

return [
    'name'        => 'DomainNameAPI',
    'description' => "Avec Domainnameapi.com, l'un des registraires de noms de domaine populaires, toutes les transactions de noms de domaine peuvent être effectuées instantanément via l'API de domaine. Pour ce faire, définissez les informations de votre compte client domainnameapi.com dans les champs suivants.",
    'fields'      => [
        'username'      => 'ID revendeur (Reseller ID)',
        'password'      => 'Clé API',
        'test-mode'     => 'Mode test',
        'adp'           => 'Mettre à jour les prix automatiquement',
        'cost-currency' => 'Devise des coûts',
        'exclude'       => 'Extensions exclues',
        'balance'       => 'Solde',
    ],
    'desc'        => [
        'username'      => "Votre ID revendeur (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx), dans les paramètres API du panneau DomainNameAPI. L'e-mail de connexion au panneau ne fonctionne pas ici.",
        'password'      => "La clé API de l'ID revendeur. Laissez le masque inchangé pour conserver la valeur enregistrée.",
        'test-mode'     => 'Activez pour traiter en mode test',
        'adp'           => 'Récupère automatiquement les prix quotidiennement et le prix est fixé au taux de profit',
        'cost-currency' => "Devise des coûts d'extension que l'API renvoie sans devise.",
        'exclude'       => 'Extensions séparées par des virgules, jamais importées ni mises à jour, par ex. com.tr,org.tr',
    ],
    'error1'      => "Les informations de l'API ne sont pas disponibles",
    'error2'      => "Les informations sur le domaine et l'extension ne sont pas présentes",
    'error8'      => "Veuillez entrer les informations de l'API",
    'error10'     => "Une erreur s'est produite",
    'error11'     => "Le nom de l'entreprise doit contenir au moins deux mots.",
    'error12'     => 'Des documents et une vérification sont nécessaires avant que le nom de domaine ne soit activé.',
    'success1'    => 'Paramètres enregistrés avec succès',
];
