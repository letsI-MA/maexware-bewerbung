<?php

$sMetadataVersion = '2.1';

$aModule = [
    'id'          => 'mymodule',
    'title'       => 'Mein Test-Modul',
    'description' => 'Ein Beispiel-Modul für den O3-Shop.',
    'version'     => '1.0.0',
    'author'      => 'Matthias Istel',
    'email'       => 'dein.email@example.com',
    'extend'      => [],
    'settings'    => [],
    'events'      => [
        'onActivate'   => '\myvendor\mymodule\Core\Events::onActivate',
        'onDeactivate' => '\myvendor\mymodule\Core\Events::onDeactivate',
    ],
    'controllers' => [],
];
