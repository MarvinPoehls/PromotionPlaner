<?php

namespace MarvinPoehls\PromotionPlaner\Core\Events;

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
        self::addColumnIfNotExists('oxarticles', 'FC_PROMOTIONPLANERURL', 'ALTER TABLE oxarticles ADD FC_PROMOTIONPLANERURL VARCHAR(255) NULL;');
        self::addColumnIfNotExists('oxarticles', 'FC_PROMOTIONPLANERFROM', 'ALTER TABLE oxarticles ADD FC_PROMOTIONPLANERFROM VARCHAR(255) NULL;');
        self::addColumnIfNotExists('oxarticles', 'FC_PROMOTIONPLANERTO', 'ALTER TABLE oxarticles ADD FC_PROMOTIONPLANERTO VARCHAR(255) NULL;');
        self::addColumnIfNotExists('oxarticles', 'FC_PROMOTIONPLANERACTIVE', 'ALTER TABLE oxarticles ADD FC_PROMOTIONPLANERACTIVE BOOLEAN DEFAULT 1;');
        self::addColumnIfNotExists('oxcategories', 'FC_PROMOTIONPLANERURL', 'ALTER TABLE oxcategories ADD FC_PROMOTIONPLANERURL VARCHAR(255) NULL;');
        self::addColumnIfNotExists('oxcategories', 'FC_PROMOTIONPLANERFROM', 'ALTER TABLE oxcategories ADD FC_PROMOTIONPLANERFROM VARCHAR(255) NULL;');
        self::addColumnIfNotExists('oxcategories', 'FC_PROMOTIONPLANERTO', 'ALTER TABLE oxcategories ADD FC_PROMOTIONPLANERTO VARCHAR(255) NULL;');
        self::addColumnIfNotExists('oxcategories', 'FC_PROMOTIONPLANERACTIVE', 'ALTER TABLE oxcategories ADD FC_PROMOTIONPLANERACTIVE BOOLEAN DEFAULT 1;');
        self::addColumnIfNotExists('oxmanufacturers', 'FC_PROMOTIONPLANERURL', 'ALTER TABLE oxmanufacturers ADD FC_PROMOTIONPLANERURL VARCHAR(255) NULL;');
        self::addColumnIfNotExists('oxmanufacturers', 'FC_PROMOTIONPLANERFROM', 'ALTER TABLE oxmanufacturers ADD FC_PROMOTIONPLANERFROM VARCHAR(255) NULL;');
        self::addColumnIfNotExists('oxmanufacturers', 'FC_PROMOTIONPLANERTO', 'ALTER TABLE oxmanufacturers ADD FC_PROMOTIONPLANERTO VARCHAR(255) NULL;');
        self::addColumnIfNotExists('oxmanufacturers', 'FC_PROMOTIONPLANERACTIVE', 'ALTER TABLE oxmanufacturers ADD FC_PROMOTIONPLANERACTIVE BOOLEAN DEFAULT 1;');
    }

    private static function _rebuildViews(){
        if (Registry::getSession()->getVariable('malladmin')) {
            $metaData = oxnew(DbMetaDataHandler::class);
            $metaData->updateViews();
        }
    }

    public static function addColumnIfNotExists($sTableName, $sColumnName, $sQuery, $aNewColumnDataQueries = array())
    {
        $aColumns = DatabaseProvider::getDb()->getAll("SHOW COLUMNS FROM {$sTableName} LIKE ?", array($sColumnName));
        if (empty($aColumns)) {
            try {
                DatabaseProvider::getDb()->Execute($sQuery);
                foreach ($aNewColumnDataQueries as $sQuery) {
                    DatabaseProvider::getDb()->Execute($sQuery);
                }
                return true;
            } catch (\Exception $e) {
                // do nothing as of yet
            }
        }
        return false;
    }
}