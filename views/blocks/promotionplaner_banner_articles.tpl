[{if $oDetailsProduct && $oDetailsProduct->mpIsPromotionTime() && $oDetailsProduct->mpIsActive()}]
<div>
    <img style="width: 100%; object-fit: contain; margin-bottom: 5%; background-color: #0d0d0d" src="[{$oDetailsProduct->mpGetBannerUrl()}]" height="65" alt="Promotion Banner">
</div>
[{/if}]

[{$smarty.block.parent}]