<?php
/**
 * Price enter mode: netto
 * Price view mode: netto
 * Product count: 1
 * VAT info: 20%
 * Currency rate: 1.0
 * Discounts: count
 *  1. shop; %; 10; group
 *  2. shop; %; 5; group
 *  3. shop; %; -10; general
 * Short description: Netto-Netto general discount to user groups, prices ABC and separate discounts;
 */
$aData = array(
        'articles' => array(
                0 => array(
                        'oxid'            => 1000,
                        'oxprice'         => 100.55,
                        'oxpricea'        => 100,
                        'oxpriceb'        => 10
                ),
        ),
        'user' => array(
                'oxid' => '_testUser',
                'oxactive' => 1,
                'oxusername' => 'user',
        ),
        'discounts' => array(
                0 => array(
                        'oxid'             => 'percentForShop',
                        'oxaddsum'         => -10,
                        'oxaddsumtype'     => '%',
                        'oxprice'          => 0,
                        'oxpriceto'        => 99999,
                        'oxamount'         => 0,
                        'oxamountto'       => 99999,
                        'oxactive'         => 1,
                        'oxsort'           => 10,
                ),
                1 => array(
                        'oxid'             => 'groupADiscount',
                        'oxaddsum'         => 10,
                        'oxaddsumtype'     => '%',
                        'oxprice'          => 0,
                        'oxpriceto'        => 99999,
                        'oxamount'         => 0,
                        'oxamountto'       => 99999,
                        'oxactive'         => 1,
                        'oxgroups'         => array( 'oxidpricea' ),
                        'oxsort'           => 20,
                ),
                2 => array(
                        'oxid'             => 'groupBDiscount',
                        'oxaddsum'         => 5,
                        'oxaddsumtype'     => '%',
                        'oxprice'          => 0,
                        'oxpriceto'        => 99999,
                        'oxamount'         => 0,
                        'oxamountto'       => 99999,
                        'oxactive'         => 1,
                        'oxgroups'         => array( 'oxidpriceb' ),
                        'oxsort'           => 30,
                ),
        ),
        'group' => array(
                0 => array(
                        'oxid' => 'oxidpricea',
                        'oxactive' => 1,
                        'oxtitle' => 'Price A',
                        'oxobject2group' => array( '_testUserA', 'groupADiscount' ),
                ),
                1 => array(
                        'oxid' => 'oxidpriceb',
                        'oxactive' => 1,
                        'oxtitle' => 'Price B',
                        'oxobject2group' => array( '_testUserB', 'groupBDiscount' ),
                ),
        ),
        'expected' => array(
                1000 => array(
                        'base_price'        => '100,55',
                        'price'             => '110,61',
                ),
        ),
        'options' => array(
                'config' => array(
                        'blEnterNetPrice' => true,
                        'blShowNetPrice' => true,
                        'dDefaultVAT' => 20,
                ),
                'activeCurrencyRate' => 1,
        ),
);
