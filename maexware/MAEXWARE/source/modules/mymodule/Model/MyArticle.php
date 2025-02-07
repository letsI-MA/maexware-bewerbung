<?php

namespace YourVendor\MyModule\Model;

use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\Shop;
use OxidEsales\Eshop\Core\Article;

class MyArticle extends Article
{
    // Neue Methode, um das benutzerdefinierte Feld zu bekommen
    public function getMyCustomField()
    {
        $oArticle = $this->getArticle();
        return $oArticle->my_custom_field;  // Hier wird das neue Feld abgerufen
    }
}
