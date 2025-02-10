<?php

namespace myvendor\mymodule\Core;

class Events
{
    public static function onActivate()
    {
        \OxidEsales\Eshop\Core\DatabaseProvider::getDb()->execute(
            "UPDATE oxconfig SET OXVARVALUE = '1' WHERE OXVARNAME = 'blSomeConfigValue'"
        );
    }

    public static function onDeactivate()
    {
        \OxidEsales\Eshop\Core\DatabaseProvider::getDb()->execute(
            "UPDATE oxconfig SET OXVARVALUE = '0' WHERE OXVARNAME = 'blSomeConfigValue'"
        );
    }
}
