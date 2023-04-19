<?php

namespace MarvinPoehls\PromotionPlaner\Controller;

use OxidEsales\Eshop\Core\DatabaseProvider;

if(false){
    class_alias(\OxidEsales\Eshop\Application\Controller\Admin\ArticleMain::class, 'MarvinPoehls\PromotionPlaner\Controller\ArticleMain_parent');
}

class ArticleMain extends ArticleMain_parent
{
    public function save(){
        parent::save();

        \OxidEsales\Eshop\Core\Registry::getUtilsFile()->processFiles($_FILES);
    }
}