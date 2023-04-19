<?php

namespace MarvinPoehls\PromotionPlaner\Controller;

use OxidEsales\Eshop\Core\DatabaseProvider;

if(false){
    class_alias(\OxidEsales\Eshop\Application\Controller\Admin\CategoryMain::class, 'MarvinPoehls\PromotionPlaner\Controller\CategoryMain_parent');
}

class CategoryMain extends CategoryMain_parent
{
    public function save(){
        parent::save();

        \OxidEsales\Eshop\Core\Registry::getUtilsFile()->processFiles($_FILES);
    }
}