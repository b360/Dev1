
{jrCore_lang skin="mycollectioncaddie" id=113 default="Store" assign="page_title"}
{jrCore_module_url module="jrStore" assign="murl"}
{jrCore_page_title title=$page_title}
{jrCore_include template="header.tpl"}

<div class="fs">
    <div class="row">
        <div class="box">
            <div class="head">{jrCore_lang skin="mycollectioncaddie" id="22" default="Categories"}</div>
            {jrSearch_module_form fields="product_category_url,,product_category"}
            <div class="box_body">
                <div class="wrap" style="padding: 0.5em">
                    <div id="list" class="clearfix animatedParent animateOnce">
                        {jrCore_list
                        module="jrStore"
                        order_by="product_category asc"
                        template="category.tpl"
                        group_by="product_category_url"
                        pagebreak=20
                        page=$_post.p
                        pager=true
                        template="category.tpl"
                        }
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



{jrCore_include template="footer.tpl"}
