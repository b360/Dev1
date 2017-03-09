{jrCore_module_url module="myPEZ" assign="murl"}
<div class="p5">
    <span class="action_item_title">
    {if $item.action_mode == 'create'}
        {jrCore_lang module="myPEZ" id="11" default="Posted a new pez"}:
    {else}
        {jrCore_lang module="myPEZ" id="12" default="Updated a pez"}:
    {/if}
    <br>
    <a href="{$jamroom_url}/{$item.profile_url}/{$murl}/{$item.action_item_id}/{$item.action_data.pez_title_url}" title="{$item.action_data.pez_title|jrCore_entity_string}">{$item.action_data.pez_title}</a>
    </span>
</div>
