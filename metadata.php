<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id'           => 'promotionplaner',
    'title'  => [
        'de' => 'Promotion-Planer',
        'en' => 'Promotion-Planer',
    ],
    'description'  => [
        'de' => 'Modul mit dem man zeitlich gesteuerte Werbebanner auf bestimmten Seiten anlegen kann.',
        'en' => 'Module with which you can create time-controlled advertising banners on certain pages.',
    ],
    'thumbnail'    => '',
    'version'      => '1.0',
    'author'       => 'Marvin Poehls',
    'url'          => 'https://www.fatchip.de/',
    'email'        => 'marvin.poehls@fatchip.de',
    'extend'       => [
        \OxidEsales\Eshop\Application\Model\Article::class => MarvinPoehls\PromotionPlaner\Model\Article::class,
        \OxidEsales\Eshop\Application\Controller\Admin\ArticleMain::class => MarvinPoehls\PromotionPlaner\Controller\ArticleMain::class,
        \OxidEsales\Eshop\Application\Model\Category::class => MarvinPoehls\PromotionPlaner\Model\Category::class,
        \OxidEsales\Eshop\Application\Controller\Admin\CategoryMain::class => MarvinPoehls\PromotionPlaner\Controller\CategoryMain::class,
        \OxidEsales\Eshop\Application\Model\Manufacturer::class => MarvinPoehls\PromotionPlaner\Model\Manufacturer::class,
        \OxidEsales\Eshop\Application\Controller\Admin\ManufacturerMain::class => MarvinPoehls\PromotionPlaner\Controller\ManufacturerMain::class,
        \OxidEsales\Eshop\Core\UtilsFile::class => MarvinPoehls\PromotionPlaner\Core\UtilsFile::class,
    ],
    'blocks' => [
        [
            'template' => 'article_main.tpl',
            'block' => 'admin_article_main_form',
            'file' => 'views/blocks/admin/promotionplaner_articles_extension.tpl',
        ],
        [
            'template' => 'include/category_main_form.tpl',
            'block' => 'admin_category_main_form',
            'file' => 'views/blocks/admin/promotionplaner_categories_extension.tpl',
        ],
        [
            'template' => 'manufacturer_main.tpl',
            'block' => 'admin_manufacturer_main_form',
            'file' => 'views/blocks/admin/promotionplaner_manufacturers_extension.tpl',
        ],
        [
            'template' => 'page/details/inc/productmain.tpl',
            'block' => 'details_productmain_title',
            'file' => 'views/blocks/promotionplaner_banner_articles.tpl',
        ],
        [
            'template' => 'page/list/list.tpl',
            'block' => 'page_list_listhead',
            'file' => 'views/blocks/promotionplaner_banner_categories.tpl',
        ],
        [
            'template' => 'page/details/inc/productmain.tpl',
            'block' => 'details_productmain_title',
            'file' => 'views/blocks/promotionplaner_banner_manufacturers.tpl',
        ],
    ],
    'settings' => [],
    'events' => [
        'onActivate' => '\MarvinPoehls\PromotionPlaner\Core\Events\Setup::onActivate',
    ]
];
