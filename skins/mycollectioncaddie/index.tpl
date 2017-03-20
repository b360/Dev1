{* /////////// DO NOT REMOVE added a comment by michael //////////  *}
{assign var="page_template" value="index"}
{* /////////// DO NOT REMOVE //////////  *}

{jrCore_include template="header.tpl"}

{jrCore_include template="index_top.tpl"}


<BR>
<BR>
<BR>
<BR>

SECTON TWOOOOOOO <br>
{myPEZ_drop_down assign="_pez"}
{if is_array($_pez)}
    {foreach $_pez as $pez}
        {$pez.pezdatabase_title}<br>
    {/foreach}
{/if}

<br>
<br>
<br>
<br>
<br>
<br>
{jrCore_include template="index_list.tpl"}


{jrCore_include template="footer.tpl"}

