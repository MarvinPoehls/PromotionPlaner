[{if $oManufacturer && $oManufacturer->mpIsPromotionTime() && $oManufacturer->mpIsActive()}]
<img style="width: 100%; object-fit: contain; margin-bottom: 5%; background-color: #0d0d0d" src="[{$oManufacturer->mpGetBannerUrl()}]" height="65" alt="Promotion Banner">
[{/if}]

[{$smarty.block.parent}]