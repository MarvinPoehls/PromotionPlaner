<?php

namespace marvin\PromotionPlaner\Controller;

use OxidEsales\Eshop\Application\Model\Manufacturer;
use OxidEsales\Eshop\Core\DatabaseProvider;

if(false){
    class_alias(\OxidEsales\Eshop\Application\Controller\Admin\ManufacturerMain::class, 'marvin\PromotionPlaner\Controller\ManufacturerMain_parent');
}

class ManufacturerMain extends ManufacturerMain_parent
{
    public function save(){
        parent::save();

        $error = $_FILES['myfile']['error']['MBAN@oxarticles__fc_promotionplanerurl'];

        if($error == UPLOAD_ERR_OK){
            \OxidEsales\Eshop\Core\Registry::getUtilsFile()->processFiles($_FILES);
        }

        if($error == UPLOAD_ERR_NO_FILE){
            $sql = "UPDATE oxarticles SET FC_PROMOTIONPLANERURL = null WHERE oxid = '".$this->getEditObjectId()."'";
            DatabaseProvider::getDb()->execute($sql);
        }
    }
}