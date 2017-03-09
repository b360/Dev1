{jrCore_include template="header.tpl"}

<div class="block">

    <div class="title">
        <h1>{jrCore_lang module="myPEZDatabase" id="10" default="PEZDatabase"}</h1>
    </div>

    <div class="block_content">

        {jrCore_list module="myPEZDatabase" order_by="_item_id numerical_desc" pagebreak="10" page=$_post.p pager=true}

    </div>

</div>

{jrCore_include template="footer.tpl"}
