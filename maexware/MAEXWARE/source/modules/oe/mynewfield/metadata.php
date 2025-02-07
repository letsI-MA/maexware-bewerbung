<?php
// source/modules/oe/mynewfield/metadata.php

$sMetadataVersion = '2.0';

$aModule = [
    'id'          => 'oe/mynewfield', 
    'title'       => 'My New Field',
    'description' => 'Adds a new field to the product detail page',
    'version'     => '1.0.0',
    'author'      => 'Dein Name',
    'controllers' => [],
    'extend'      => [
        \OxidEsales\Eshop\Application\Model\Article::class => \oe\mynewfield\Model\Article::class,
    ],
    'blocks'      => [
        [
            'template' => 'page/details/inc/productmain.tpl',
            'block'    => 'details_productmain_title',
            'file'     => 'views/blocks/details_productmain_title.tpl',
        ],
    ],
    'settings'    => [],
];