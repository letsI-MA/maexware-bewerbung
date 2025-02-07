<?php
// source/modules/oe/mynewfield/Model/Article.php

namespace oe\mynewfield\Model;

class Article extends Article_parent
{
    public function getMyNewField()
    {
        return $this->oxarticles__oenewfield->value;
    }
}