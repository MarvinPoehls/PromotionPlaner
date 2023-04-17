[{$smarty.block.parent}]

<tr>
    <td class="edittext">
        [{oxmultilang ident="FC_PROMOTIONPLANER_URL"}]&nbsp;
    </td>
    <td class="edittext">
        <input type="file" class="editinput" accept="image/*" size="32" maxlength="[{$edit->oxmanufacturers__fc_promotionplanerurl->fldmax_length}]" name="myfile[FL@oxmanufacturers__fc_promotionplanerurl]" value="[{$edit->oxmanufacturers__fc_promotionplanerurl->value}]" [{$readonly}]>
        [{oxinputhelp ident="HELP_FC_PROMOTIONPLANER_URL_MANUFACTURER"}]
    </td>
</tr>
<tr>
    <td class="edittext">
        [{oxmultilang ident="FC_PROMOTIONPLANER_FROM"}]&nbsp;
    </td>
    <td class="edittext">
        <input type="date" class="editinput" size="32" maxlength="[{$edit->oxmanufacturers__fc_promotionplanerfrom->fldmax_length}]" name="editval[oxmanufacturers__fc_promotionplanerfrom]" value="[{$edit->oxmanufacturers__fc_promotionplanerfrom->value}]" [{$readonly}]>
        [{oxinputhelp ident="HELP_FC_PROMOTIONPLANER_FROM"}]
    </td>
</tr>
<tr>
    <td class="edittext">
        [{oxmultilang ident="FC_PROMOTIONPLANER_TO"}]&nbsp;
    </td>
    <td class="edittext">
        <input type="date" class="editinput" size="32" maxlength="[{$edit->oxmanufacturers__fc_promotionplanerto->fldmax_length}]" name="editval[oxmanufacturers__fc_promotionplanerto]" value="[{$edit->oxmanufacturers__fc_promotionplanerto->value}]" [{$readonly}]>
        [{oxinputhelp ident="HELP_FC_PROMOTIONPLANER_TO"}]
    </td>
</tr>