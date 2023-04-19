<?php

namespace MarvinPoehls\PromotionPlaner\Model;

use MarvinPoehls\PromotionPlaner\Core\Promotion;
use OxidEsales\Eshop\Core\Registry;

if(false){
    class_alias(\OxidEsales\Eshop\Application\Model\Manufacturer::class, 'MarvinPoehls\PromotionPlaner\Model\Manufacturer_parent');
}

class Manufacturer extends Manufacturer_parent
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
        return Promotion::getBannerImageDir().'manufacturer/'.$promotionUrl;
    }
}