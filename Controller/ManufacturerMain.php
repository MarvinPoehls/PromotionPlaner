<?php

namespace MarvinPoehls\PromotionPlaner\Controller;

use OxidEsales\Eshop\Application\Model\Manufacturer;
use OxidEsales\Eshop\Core\DatabaseProvider;

if(false){
    class_alias(\OxidEsales\Eshop\Application\Controller\Admin\ManufacturerMain::class, 'MarvinPoehls\PromotionPlaner\Controller\ManufacturerMain_parent');
}

class ManufacturerMain extends ManufacturerMain_parent
{
    public function save(){
        parent::save();

        \OxidEsales\Eshop\Core\Registry::getUtilsFile()->processFiles($_FILES);
    }
}