{if isset($_items)}

    <ul class="pez_menu">
        {jrCore_module_url module="myPEZDatabase" assign="murl"}
        {foreach from=$_items item="item"}



            <li><a href="{$jamroom_url}">{$item.pezdatabase_series_1}</a></li>
            {jrCore_list module="myPEZDatabase"  order_by="pezdatabase_series_2 ASC"  group_by="pezdatabase_series_2 UNIQUE" limit=500 template="pez_menu3.tpl"}

        {/foreach}

    </ul>

{/if}