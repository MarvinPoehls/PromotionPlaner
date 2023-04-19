<?php

namespace MarvinPoehls\PromotionPlaner\Core;

use OxidEsales\Eshop\Core\Registry;

class Promotion
{
    public static function isPromotionTime($promotionTimeFrom, $promotionTimeTo, $promotionUrl): bool
    {
        if ($promotionTimeFrom != "" && $promotionTimeTo != "" && $promotionUrl != "") {
            $promotionTimeFrom = strtotime($promotionTimeFrom);
            $promotionTimeTo = strtotime($promotionTimeTo);

            if($promotionTimeFrom <= time() && time() <= $promotionTimeTo){
                return true;
            }
        }
        return false;
    }

    public static function getBannerImageDir(): string
    {
        $config = Registry::getConfig();
        return $config->getShopUrl().'out/pictures/MarvinPoehls/PromotionPlaner/images/';
    }
}