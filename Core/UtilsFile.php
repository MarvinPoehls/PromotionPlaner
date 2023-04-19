<?php

namespace MarvinPoehls\PromotionPlaner\Core;

if(false){
    class_alias(\OxidEsales\Eshop\Core\UtilsFile::class, 'MarvinPoehls\PromotionPlaner\Core\UtilsFile_parent');
}

class UtilsFile extends UtilsFile_parent
{
    public function __construct()
    {
        parent::__construct();

        $this->_aTypeToPath += [
            "ABAN" => "MarvinPoehls/PromotionPlaner/images/article",
            "CBAN" => "MarvinPoehls/PromotionPlaner/images/category",
            "MBAN" => "MarvinPoehls/PromotionPlaner/images/manufacturer",
        ];
    }
}