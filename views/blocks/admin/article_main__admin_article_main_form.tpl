[{$smarty.block.parent}]

<tr>
    <td class="edittext">
        [{oxmultilang ident="FC_PROMOTIONPLANER_URL"}]&nbsp;
    </td>
    <td class="edittext">
        <input type="text" class="editinput" size="32" maxlength="[{$edit->oxarticles__fc_promotionplanerurl->fldmax_length}]" name="editval[oxarticles__fc_promotionplanerurl]" value="[{$edit->oxarticles__fc_promotionplanerurl->value}]" [{$readonly}]>
        [{oxinputhelp ident="HELP_FC_PROMOTIONPLANER_URL"}]
    </td>
</tr>
<tr>
    <td class="edittext">
        [{oxmultilang ident="FC_PROMOTIONPLANER_FROM"}]&nbsp;
    </td>
    <td class="edittext">
        <input type="text" class="editinput" size="32" maxlength="[{$edit->oxarticles__fc_promotionplanerfrom->fldmax_length}]" name="editval[oxarticles__fc_promotionplanerfrom]" value="[{$edit->oxarticles__fc_promotionplanerfrom->value}]" [{$readonly}]>
        [{oxinputhelp ident="HELP_FC_PROMOTIONPLANER_FROM"}]
    </td>
</tr>
<tr>
    <td class="edittext">
        [{oxmultilang ident="FC_PROMOTIONPLANER_TO"}]&nbsp;
    </td>
    <td class="edittext">
        <input type="text" class="editinput" size="32" maxlength="[{$edit->oxarticles__fc_promotionplanerto->fldmax_length}]" name="editval[oxarticles__fc_promotionplanerto]" value="[{$edit->oxarticles__fc_promotionplanerto->value}]" [{$readonly}]>
        [{oxinputhelp ident="HELP_FC_PROMOTIONPLANER_TO"}]
    </td>
</tr>