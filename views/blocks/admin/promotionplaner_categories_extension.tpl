[{$smarty.block.parent}]
<tr>
    <td><strong>Promotion-Planer</strong></td>
</tr>
<tr>
    <td class="edittext">
        [{oxmultilang ident="FC_PROMOTIONPLANER_URL_CATEGORY"}]&nbsp;
    </td>
    <td class="edittext">
        <div>
            <div style="display: inline">
                [{$edit->oxcategories__fc_promotionplanerurl->value}]
            </div>
            <div style="display: inline">
                <input type="file" class="editinput" accept="image/*" maxlength="[{$edit->oxcategories__fc_promotionplanerurl->fldmax_length}]" name="myfile[CBAN@oxcategories__fc_promotionplanerurl]" value="[{$edit->oxcategories__fc_promotionplanerurl->value}]" [{$readonly}]>
                [{oxinputhelp ident="HELP_FC_PROMOTIONPLANER_URL_CATEGORY"}]
            </div>
        </div>
    </td>
</tr>
<tr>
    <td class="edittext">
        [{oxmultilang ident="FC_PROMOTIONPLANER_PREVIEW"}]&nbsp;
    </td>
    <td class="edittext">
        [{if $edit->oxcategories__fc_promotionplanerurl->value}]
    <img src="[{$edit->mpGetBannerUrl()}]" width="1140" height="100" style="object-fit: contain; background-color: #0d0d0d" alt="Preview">
        [{else}]
        <div style="width: 1140px; height: 100px; display: flex; justify-content: center; align-items: center; border: 1px solid black;">
            <p>Preview</p>
        </div>
        [{/if}]
    </td>
</tr>
<tr>
    <td class="edittext">
        [{oxmultilang ident="FC_PROMOTIONPLANER_ACTIVE"}]&nbsp;
    </td>
    <td class="edittext">
        <input type="hidden" class="editinput" name="editval[oxcategories__fc_promotionplaneractive]" value="0" [{$readonly}]>
        <input type="checkbox" class="editinput" name="editval[oxcategories__fc_promotionplaneractive]" value="1" [{if $edit->oxcategories__fc_promotionplaneractive->value == 1}]checked[{/if}] [{$readonly}]>
    </td>
</tr>
<tr>
    <td class="edittext">
        [{oxmultilang ident="FC_PROMOTIONPLANER_FROM"}]&nbsp;
    </td>
    <td class="edittext">
        <input type="date" class="editinput" size="32" maxlength="[{$edit->oxcategories__fc_promotionplanerfrom->fldmax_length}]" name="editval[oxcategories__fc_promotionplanerfrom]" value="[{$edit->oxcategories__fc_promotionplanerfrom->value}]" [{$readonly}]>
        [{oxinputhelp ident="HELP_FC_PROMOTIONPLANER_FROM"}]
    </td>
</tr>
<tr>
    <td class="edittext">
        [{oxmultilang ident="FC_PROMOTIONPLANER_TO"}]&nbsp;
    </td>
    <td class="edittext">
        <input type="date" class="editinput" size="32" maxlength="[{$edit->oxcategories__fc_promotionplanerto->fldmax_length}]" name="editval[oxcategories__fc_promotionplanerto]" value="[{$edit->oxcategories__fc_promotionplanerto->value}]" [{$readonly}]>
        [{oxinputhelp ident="HELP_FC_PROMOTIONPLANER_TO"}]
    </td>
</tr>