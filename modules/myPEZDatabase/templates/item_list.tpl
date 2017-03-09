{jrCore_module_url module="myPEZDatabase" assign="murl"}
{if isset($_items)}
    {foreach from=$_items item="item"}
        <div class="item">

            <div class="block_config">
                {jrCore_item_list_buttons module="myPEZDatabase" item=$item}
            </div>


            <table class="tg">
                <tr>
                    <th class="tg-yw4l">{jrCore_module_function function="jrImage_display" module="myPEZDatabase" type="pezdatabase_image" item_id=$item._item_id size="large" crop="auto" alt=$item.pezdatabase_title  class="image"}<br><h2><a href="{$jamroom_url}/{$item.profile_url}/{$murl}/{$item._item_id}/{$item.pezdatabase_title_url}">{$item.pezdatabase_title}</a></h2></th>
                    <th class="tg-yw4l">Category: {$item.pezdatabase_series_0}
                    <br>Series: {$item.pezdatabase_series_1}
                    <br>Sub-Series: {$item.pezdatabase_series_2}
                    </th>
                    <th class="tg-yw4l">Production: {$item.pezdatabase_production}
                        <br>Stem Color: {$item.pezdatabase_stemcolor}
                        <br>Candy: {$item.pezdatabase_candy}</th>

                </tr>
            </table>

            {*<div class="col01" style="height: 150px">*}

    {*<div class="col3" >*}
        {*{jrCore_module_function function="jrImage_display" module="myPEZDatabase" type="Pezdatabase_image" item_id="{$item.item_id}" size="icon" crop="auto" alt=$item.user_name class="image" }*}
    {*</div>*}
    {*<div class="col3" style="outline: ridge; outline-color: #00ff00"><h2><a href="{$jamroom_url}/{$item.profile_url}/{$murl}/{$item.pezdatabase_item_id}/{$item.pezdatabase_title_url}">{$item.pezdatabase_title}</a></h2></div>*}
    {*<div class="col3"style="outline: ridge; outline-color: #5C2699">this should have 4 coloumbs</div>*}


{*</div>*}

        </div>

    {/foreach}
{/if}
