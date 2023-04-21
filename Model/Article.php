<?php

namespace MarvinPoehls\PromotionPlaner\Model;

use MarvinPoehls\PromotionPlaner\Core\Promotion;
use OxidEsales\Eshop\Core\Registry;

if(false){
    class_alias(\OxidEsales\Eshop\Application\Model\Article::class, 'MarvinPoehls\PromotionPlaner\Model\Article_parent');
}

class Article extends Article_parent
{
    public function mpIsPromotionTime(): bool
    {
        $promotionTimeFrom = $this->getFieldData('fc_promotionplanerfrom');
        $promotionTimeTo = $this->getFieldData('fc_promotionplanerto');
        $promotionUrl = $this->getFieldData('fc_promotionplanerurl');

        return Promotion::isPromotionTime($promotionTimeFrom, $promotionTimeTo, $promotionUrl);
    }

    public function mpGetBannerUrl(): string
    {
        $promotionUrl = $this->getFieldData('fc_promotionplanerurl');
        return Promotion::getBannerImageDir().'article/'.$promotionUrl;
    }

    public function mpIsActive(){
        return $this->getFieldData('fc_promotionplaneractive');
    }
}