# Promotion-Planer

Installation Guide

1. Set up an Oxid eShop (if not already done).
2. Open PowerShell and navigate to the base folder where your shop is located.
3. Run the command "composer require marvinpoehls/promotionplaner".
4. Run the command "vendor/bin/oe-console oe:module:install-configuration source/modules/MarvinPoehls/PromotionPlaner".
5. Run the command "vendor/bin/oe-console oe:module:apply-configuration".
6. Now you can activate the "Promotion-Planer" module in your shop's admin under "Extensions > Modules".

Description

With the promotion planner module for your Oxid eShop you can upload banners for articles, categories or manufacturers in the admin. These are then in the shop on the
respective page. The banners can be timed.
