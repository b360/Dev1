{jrCore_module_url module="myPEZDatabase" assign="murl"}
<div class="p5">
    <span class="action_item_title">
    {if $item.action_mode == 'create'}
        {jrCore_lang module="myPEZDatabase" id="11" default="Posted a new pezdatabase"}:
    {else}
        {jrCore_lang module="myPEZDatabase" id="12" default="Updated a pezdatabase"}:
    {/if}
    <br>
    <a href="{$jamroom_url}/{$item.profile_url}/{$murl}/{$item.action_item_id}/{$item.action_data.pezdatabase_title_url}" title="{$item.action_data.pezdatabase_title|jrCore_entity_string}">{$item.action_data.pezdatabase_title}</a>
    </span>
</div>
