
{foreach from=$_items item="item"}

    <th>
<a class="quickadd_button" href="{$jamroom_url}/{$item.profile_url}/pez/{$item._item_id}/{$item.pez_title_url}">{$item.pez_title}
</th>
{/foreach}