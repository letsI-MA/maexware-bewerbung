<?php
namespace MyVendor\O3CustomField\Application\Model;

class O3Article extends O3Article_parent
{
public function getO3CustomField()
{
return $this->oxarticles__O3CustomField->value;
}
}
