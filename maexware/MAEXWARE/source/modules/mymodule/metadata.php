<?php
$sMetadataVersion = '2.0';

$aModule = [
    'id'          => 'mymodule',
    'title'       => 'Mein Modul',
    'description' => 'Zeigt ein neues Datenbankfeld auf der Artikeldetailseite an.',
    'version'     => '1.0',
    'author'      => 'Matthias Istel',
    'extend'      => [
        \OxidEsales\Eshop\Application\Model\Article::class => \YourVendor\MyModule\Model\MyArticle::class, // Artikelklasse erweitern
    ],
    'templates'   => [
        'mytemplate.tpl' => 'mymodule/views/mytemplate.tpl', // Template für das Feld
    ],
];
