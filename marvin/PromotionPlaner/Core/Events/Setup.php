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

    public static function onDeactivate(){
        //self::deleteFields();
        //self::_rebuildViews();
    }

    public static function addFields(){
        $db = DatabaseProvider::getDb();

        $sql = "SHOW COLUMNS FROM oxarticles LIKE 'FC_PROMOTIONPLANER%'";

        if (!$db->getOne($sql)) {
            $db->execute("ALTER TABLE oxarticles ADD FC_PROMOTIONPLANERURL VARCHAR(255) NULL;");
            $db->execute("ALTER TABLE oxarticles ADD FC_PROMOTIONPLANERFROM VARCHAR(255) NULL;");
            $db->execute("ALTER TABLE oxarticles ADD FC_PROMOTIONPLANERTO VARCHAR(255) NULL;");
            $db->execute("ALTER TABLE oxcategories ADD FC_PROMOTIONPLANERURL VARCHAR(255) NULL;");
            $db->execute("ALTER TABLE oxcategories ADD FC_PROMOTIONPLANERFROM VARCHAR(255) NULL;");
            $db->execute("ALTER TABLE oxcategories ADD FC_PROMOTIONPLANERTO VARCHAR(255) NULL;");
            $db->execute("ALTER TABLE oxmanufacturers ADD FC_PROMOTIONPLANERURL VARCHAR(255) NULL;");
            $db->execute("ALTER TABLE oxmanufacturers ADD FC_PROMOTIONPLANERFROM VARCHAR(255) NULL;");
            $db->execute("ALTER TABLE oxmanufacturers ADD FC_PROMOTIONPLANERTO VARCHAR(255) NULL;");
        }
    }

    public static function deleteFields(){
        $db = DatabaseProvider::getDb();

        $sql = "SHOW COLUMNS FROM oxarticles LIKE 'FC_PROMOTIONPLANER%'";

        if ($db->getOne($sql)) {
            $db->execute("ALTER TABLE oxarticles DROP COLUMN FC_PROMOTIONPLANERURL;");
            $db->execute("ALTER TABLE oxarticles DROP COLUMN FC_PROMOTIONPLANERFROM;");
            $db->execute("ALTER TABLE oxarticles DROP COLUMN FC_PROMOTIONPLANERTO;");
            $db->execute("ALTER TABLE oxcategories DROP COLUMN FC_PROMOTIONPLANERURL;");
            $db->execute("ALTER TABLE oxcategories DROP COLUMN FC_PROMOTIONPLANERFROM;");
            $db->execute("ALTER TABLE oxcategories DROP COLUMN FC_PROMOTIONPLANERTO;");
            $db->execute("ALTER TABLE oxmanufacturers DROP COLUMN FC_PROMOTIONPLANERURL;");
            $db->execute("ALTER TABLE oxmanufacturers DROP COLUMN FC_PROMOTIONPLANERFROM;");
            $db->execute("ALTER TABLE oxmanufacturers DROP COLUMN FC_PROMOTIONPLANERTO;");
        }
    }

    private static function _rebuildViews(){
        if (Registry::getSession()->getVariable('malladmin')) {
            $metaData = oxnew(DbMetaDataHandler::class);
            $metaData->updateViews();
        }
    }
}