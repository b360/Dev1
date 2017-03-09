{if isset($_items)}

    <ul class="pez_menu">
        {jrCore_module_url module="myPEZDatabase" assign="murl"}
        {foreach from=$_items item="item"}



            <li><a href="{$jamroom_url}">{$item.pezdatabase_series_2}</a></li>


        {/foreach}

    </ul>

{/if}