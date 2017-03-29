{jrCore_include template="header.tpl"}


{capture assign="template"}
{literal}
    {if isset($_items) && is_array($_items)}
    <table>
        <tr>
            <th>Character</th>
            <th>Series 0</th>
            <th>Series 1</th>
            <th>Series 2</th>
            <th></th>
        </tr>
        {foreach $_items as $item}
        <tr>
            <td>{$item.pezdatabase_character}</td>
            <td>{$item.pezdatabase_series_0}</td>
            <td>{$item.pezdatabase_series_1}</td>
            <td>{$item.pezdatabase_series_2}</td>
            <td><a href="#" style="float: right;">{jrCore_icon icon="plus" size=20}</a></td>
        </tr>
        {/foreach}
    </table>
    {else}
    no items could be found
    {/if}
{/literal}
{/capture}

{if isset($_post.series_2)}
    {jrCore_list module="myPEZDatabase" search1="pezdatabase_series_0 = `$_post.series_0`"  search2="pezdatabase_series_1 = `$_post.series_1`"  search3="pezdatabase_series_2 = `$_post.series_2`" template=$template pagebreak="50" page=$_post.p pager=true}
{elseif isset($_post.series_1)}
    {jrCore_list module="myPEZDatabase" search1="pezdatabase_series_0 = `$_post.series_0`"  search2="pezdatabase_series_1 = `$_post.series_1`"  template=$template pagebreak="50" page=$_post.p pager=true}
{elseif isset($_post.series_0)}
    {jrCore_list module="myPEZDatabase" search1="pezdatabase_series_0 = `$_post.series_0`" template=$template pagebreak="50" page=$_post.p pager=true}
{else}
    No series selected
{/if}


{jrCore_include template="footer.tpl"}
