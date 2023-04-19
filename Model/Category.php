<?php

namespace MarvinPoehls\PromotionPlaner\Model;

use MarvinPoehls\PromotionPlaner\Core\Promotion;
use OxidEsales\Eshop\Core\Registry;

if(false){
    class_alias(\OxidEsales\Eshop\Application\Model\Category::class, 'MarvinPoehls\PromotionPlaner\Model\Category_parent');
}

class Category extends Category_parent
{
    public function isPromotionTime(): bool
    {
        $promotionTimeFrom = $this->getFieldData('fc_promotionplanerfrom');
        $promotionTimeTo = $this->getFieldData('fc_promotionplanerto');
        $promotionUrl = $this->getFieldData('fc_promotionplanerurl');

        return Promotion::isPromotionTime($promotionTimeFrom, $promotionTimeTo, $promotionUrl);
    }

    public function getBannerUrl(): string
    {
        $promotionUrl = $this->getFieldData('fc_promotionplanerurl');
        return Promotion::getBannerImageDir().'category/'.$promotionUrl;
    }
}