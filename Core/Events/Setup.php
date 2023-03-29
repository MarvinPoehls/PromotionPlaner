<?php

namespace marvin\PromotionPlaner\Core\Events;

use OxidEsales\Eshop\Core\Base;
use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\DbMetaDataHandler;
use OxidEsales\Eshop\Core\Registry;

class Setup extends Base
{
    public static function onActivate(){
        self::addFields();
        self::_rebuildViews();
    }

    public static function addFields(){
        $db = DatabaseProvider::getDb();
        $db->execute("ALTER TABLE oxarticles ADD FC_PROMOTIONPLANERURL VARCHAR(255) NULL;");
        $db->execute("ALTER TABLE oxarticles ADD FC_PROMOTIONPLANERFROM VARCHAR(255) NULL;");
        $db->execute("ALTER TABLE oxarticles ADD FC_PROMOTIONPLANERTO VARCHAR(255) NULL;");
    }

    private static function _rebuildViews(){
        if (Registry::getSession()->getVariable('malladmin')) {
            $metaData = oxnew(DbMetaDataHandler::class);
            $metaData->updateViews();
        }
    }
}