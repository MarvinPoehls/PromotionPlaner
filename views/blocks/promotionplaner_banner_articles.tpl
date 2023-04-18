[{if $oDetailsProduct && $oDetailsProduct->isPromotionTime()}]
<div>
    <img style="width: 100%; object-fit: cover; filter: blur(4px) brightness(80%); margin-bottom: 5%;" src="[{$oDetailsProduct->getBannerUrl()}]" height="65" alt="Promotion Banner">
    <img style="width: 95%; object-fit: contain; position: absolute; left: 2.5%;" src="[{$oDetailsProduct->getBannerUrl()}]" height="65">
</div>
[{/if}]

[{$smarty.block.parent}]