[{if $actCategory && $actCategory->mpIsPromotionTime() && $actCategory->mpIsActive() && $listType!='manufacturer'}]
<img style="width: 100%; object-fit: contain; background-color: #0d0d0d" src="[{$actCategory->mpGetBannerUrl()}]" height="100" alt="Promotion Banner">
[{/if}]

[{$smarty.block.parent}]