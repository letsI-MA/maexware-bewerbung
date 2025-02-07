<?php

use Source\Controller\ArticleController;

$sMetadataVersion = '1.0';
$aModule = [
    'id'           => 'mycustomfieldmodule',
    'title'        => 'My Custom Field Module',
    'description'  => 'Displays a custom field on the article detail page',
    'version'      => '1.0',
    'author'       => 'Matthias Istel',
    'url'          => '',
    'email'        => '',

    // Diese Sektionen registrieren das Modul im O3-Shop.
    'controllers'  => [
        'myarticle' => ArticleController::class, // Dein Controller
    ],

    'blocks'       => [
        // Falls du einen Block hinzufügen möchtest, kannst du es hier machen.
    ],

    'settings'     => [
        // Hier kannst du Modul-Settings definieren, falls nötig.
    ],

    'events'       => [
        // Hier kannst du Ereignisse wie 'onActivate', 'onDeactivate' etc. definieren.
    ],
];
