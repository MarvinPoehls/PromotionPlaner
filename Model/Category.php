<?php

namespace MarvinPoehls\PromotionPlaner\Model;

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

        if ($promotionTimeFrom != "" && $promotionTimeTo != "" && $promotionUrl != "") {
            $promotionTimeFrom = strtotime($promotionTimeFrom);
            $promotionTimeTo = strtotime($promotionTimeTo);

            if($promotionTimeFrom <= time() && time() <= $promotionTimeTo){
                return true;
            }
        }
        return false;
    }

    public function getBannerUrl(): string
    {
        $config = Registry::getConfig();
        return $config->getShopUrl().'out/pictures/MarvinPoehls/PromotionPlaner/images/category/'.$this->getFieldData('fc_promotionplanerurl');
    }
}