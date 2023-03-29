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
    'extend'       => [],
    'blocks' => [
        'template' => 'article_main.tpl',
        'block' => 'admin_article_main_form',
        'file' => 'views/blocks/admin/article_main__admin_article_main_form.tpl',

    ],
    'settings' => [],
    'events' => [
        'onActivate' => 'marvin\PromotionPlaner\Core\Events\Setup::onActivate'
    ]
];
