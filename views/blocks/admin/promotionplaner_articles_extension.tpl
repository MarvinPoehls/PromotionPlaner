[{$smarty.block.parent}]
<tr>
    <td class="edittext">
        [{oxmultilang ident="FC_PROMOTIONPLANER_ACTIVE"}]&nbsp;
    </td>
    <td class="edittext">
        <input type="hidden" class="editinput" name="editval[oxarticles__fc_promotionplaneractive]" value="0" [{$readonly}]>
        <input type="checkbox" class="editinput" name="editval[oxarticles__fc_promotionplaneractive]" value="1" [{if $edit->oxarticles__fc_promotionplaneractive->value == 1}]checked[{/if}] [{$readonly}]>
    </td>
</tr>
<tr>
    <td class="edittext">
        [{oxmultilang ident="FC_PROMOTIONPLANER_URL"}]&nbsp;
    </td>
    <td class="edittext">
        <div>
            <div style="display: inline">
                [{$edit->oxarticles__fc_promotionplanerurl->value}]
            </div>
            <div style="display: inline">
                <input type="file" class="editinput" accept="image/*" maxlength="[{$edit->oxarticles__fc_promotionplanerurl->fldmax_length}]" name="myfile[ABAN@oxarticles__fc_promotionplanerurl]" value="[{$edit->oxarticles__fc_promotionplanerurl->value}]" [{$readonly}]>
                [{oxinputhelp ident="HELP_FC_PROMOTIONPLANER_URL_ARTICLE"}]
            </div>
        </div>
    </td>
</tr>
<tr>
    <td class="edittext">
        [{oxmultilang ident="FC_PROMOTIONPLANER_FROM"}]&nbsp;
    </td>
    <td class="edittext">
        <input type="date" class="editinput" size="32" maxlength="[{$edit->oxarticles__fc_promotionplanerfrom->fldmax_length}]" name="editval[oxarticles__fc_promotionplanerfrom]" value="[{$edit->oxarticles__fc_promotionplanerfrom->value}]" [{$readonly}]>
        [{oxinputhelp ident="HELP_FC_PROMOTIONPLANER_FROM"}]
    </td>
</tr>
<tr>
    <td class="edittext">
        [{oxmultilang ident="FC_PROMOTIONPLANER_TO"}]&nbsp;
    </td>
    <td class="edittext">
        <input type="date" class="editinput" size="32" maxlength="[{$edit->oxarticles__fc_promotionplanerto->fldmax_length}]" name="editval[oxarticles__fc_promotionplanerto]" value="[{$edit->oxarticles__fc_promotionplanerto->value}]" [{$readonly}]>
        [{oxinputhelp ident="HELP_FC_PROMOTIONPLANER_TO"}]
    </td>
</tr>

<script type="text/javascript">
    document.getElementById('myedit').setAttribute('enctype', 'multipart/form-data');
</script>