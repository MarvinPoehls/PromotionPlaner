[{if $actCategory->isPromotionTime() && $listType!='manufacturer'}]
<img style="width: 100%; object-fit: cover; filter: blur(4px) brightness(80%);" src="[{$actCategory->getBannerUrl()}]" height="65" alt="Promotion Banner">
<img style="width: 95%; object-fit: contain; position: absolute; left: 2.5%; top: 0" src="[{$actCategory->getBannerUrl()}]" height="65">
[{/if}]

[{$smarty.block.parent}]