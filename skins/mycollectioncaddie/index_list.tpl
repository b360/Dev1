
<section class="features">
    <h2 class="animated">{$_conf.mycollectioncaddie_headline_2}</h2>
<div class="list_wrap">
    {jrCore_module_url module=$_conf.mycollectioncaddie_list_1_type assign="murl"}
    {if $_conf.mycollectioncaddie_list_1_active == 'on'}
        {$prefix = jrCore_db_get_prefix("`$_conf.mycollectioncaddie_list_1_type`")}
        {$require_image = "`$prefix`_image"}
        <div><h3>{mycollectioncaddie_cat_title cat=$_conf.mycollectioncaddie_list_1_category}</h3>
            <div class="index_more"><a href="{$jamroom_url}/{$murl}/cat={$_conf.mycollectioncaddie_list_1_category}">{jrCore_lang skin="mycollectioncaddie" id=72 default="See More"}</a></div></div>
        <div class="index_list clearfix page_1">
            {if strlen($_conf.mycollectioncaddie_list_1_ids) > 0}
                {$s1 = "_item_id in `$_conf.mycollectioncaddie_list_1_ids`"}
            {/if}
            <div>{jrCore_list
                module=$_conf.mycollectioncaddie_list_1_type
                search="product_category_url = `$_conf.mycollectioncaddie_list_1_category`"
                search1=$s1
                order_by=$_conf.mycollectioncaddie_list_1_order
                limit="16"
                template="index_item_1.tpl"
                require_image=$require_image
                }
            </div>
            {jrCore_list
            module=$_conf.mycollectioncaddie_list_1_type
            search="product_category_url = `$_conf.mycollectioncaddie_list_1_category`"
            search1=$s1
            order_by=$_conf.mycollectioncaddie_list_1_order
            limit="16"
            template=' '
            pagebreak="4"
            pager='true'
            pager_template="index_list_pager.tpl"
            require_image=$require_image
            }
        </div>
    {/if}

    <br>

    {if $_conf.mycollectioncaddie_list_2_active == 'on'}
        {$prefix = jrCore_db_get_prefix("`$_conf.mycollectioncaddie_list_2_type`")}
        {$require_image = "`$prefix`_image"}
        <div><h3>{mycollectioncaddie_cat_title cat=$_conf.mycollectioncaddie_list_2_category}</h3>
            <div class="index_more"><a href="{$jamroom_url}/{$murl}/cat={$_conf.mycollectioncaddie_list_2_category}">{jrCore_lang skin="mycollectioncaddie" id=72 default="See More"}</a></div></div>
        <div class="index_list clearfix page_1">
            {if strlen($_conf.mycollectioncaddie_list_2_ids) > 0}
                {$s2 = "_item_id in `$_conf.mycollectioncaddie_list_2_ids`"}
            {/if}
            <div>{jrCore_list
                module=$_conf.mycollectioncaddie_list_2_type
                search="product_category_url = `$_conf.mycollectioncaddie_list_2_category`"
                search1=$s2
                order_by=$_conf.mycollectioncaddie_list_2_order
                limit="16"
                template="index_item_2.tpl"
                require_image=$require_image
                }
            </div>
            {jrCore_list
            module=$_conf.mycollectioncaddie_list_2_type
            search="product_category_url = `$_conf.mycollectioncaddie_list_2_category`"
            search1=$s2
            order_by=$_conf.mycollectioncaddie_list_2_order
            limit="16"
            template='blank.tpl'
            pagebreak="4"
            pager='true'
            pager_template="index_list_pager.tpl"
            require_image=$require_image
            }
        </div>
    {/if}
</div>
    <div class="down">
        <a href="#"></a>
    </div>
</section>


<section class="features dark animatedParent">
    <h2 class="animated fadeInUp">{$_conf.mycollectioncaddie_headline_3}</h2>
    <div class="list_wrap">
        {if $_conf.mycollectioncaddie_list_3_active == 'on'}
            {$prefix = jrCore_db_get_prefix("`$_conf.mycollectioncaddie_list_3_type`")}
            {$require_image = "`$prefix`_image"}
            <div><h3>{mycollectioncaddie_cat_title cat=$_conf.mycollectioncaddie_list_3_category}</h3>
                <div class="index_more"><a href="{$jamroom_url}/{$murl}/cat={$_conf.mycollectioncaddie_list_3_category}">{jrCore_lang skin="mycollectioncaddie" id=72 default="See More"}</a></div></div>
            <div class="index_list clearfix page_1">
                {if strlen($_conf.mycollectioncaddie_list_3_ids) > 0}
                    {$s3 = "_item_id in `$_conf.mycollectioncaddie_list_3_ids`"}
                {/if}
                <div>{jrCore_list
                    module=$_conf.mycollectioncaddie_list_3_type
                    search="product_category_url = `$_conf.mycollectioncaddie_list_3_category`"
                    search1=$s3
                    order_by=$_conf.mycollectioncaddie_list_3_order
                    limit="16"
                    template="index_item_3.tpl"
                    require_image=$require_image
                    }
                </div>
                {jrCore_list
                module=$_conf.mycollectioncaddie_list_3_type
                search="product_category_url = `$_conf.mycollectioncaddie_list_3_category`"
                search1=$s3
                order_by=$_conf.mycollectioncaddie_list_3_order
                limit="16"
                template='blank.tpl'
                pagebreak="4"
                pager='true'
                pager_template="index_list_pager.tpl"
                require_image=$require_image
                }
            </div>
        {/if}
        {if $_conf.mycollectioncaddie_list_4_active == 'on'}
            {$prefix = jrCore_db_get_prefix("`$_conf.mycollectioncaddie_list_4_type`")}
            {$require_image = "`$prefix`_image"}
            <div><h3>{mycollectioncaddie_cat_title cat=$_conf.mycollectioncaddie_list_4_category}</h3>
                <div class="index_more"><a href="{$jamroom_url}/{$murl}/cat={$_conf.mycollectioncaddie_list_4_category}">{jrCore_lang skin="mycollectioncaddie" id=72 default="See More"}</a></div></div>
            <div class="index_list clearfix page_1">
                {if strlen($_conf.mycollectioncaddie_list_4_ids) > 0}
                    {$s4 = "_item_id in `$_conf.mycollectioncaddie_list_4_ids`"}
                {/if}
                <div>{jrCore_list
                    module=$_conf.mycollectioncaddie_list_4_type
                    search="product_category_url = `$_conf.mycollectioncaddie_list_4_category`"
                    search1=$s4
                    order_by=$_conf.mycollectioncaddie_list_4_order
                    limit="16"
                    template="index_item_4.tpl"
                    require_image=$require_image
                    }
                </div>
                {jrCore_list
                module=$_conf.mycollectioncaddie_list_4_type
                search="product_category_url = `$_conf.mycollectioncaddie_list_4_category`"
                search1=$s4
                order_by=$_conf.mycollectioncaddie_list_4_order
                limit="16"
                template='blank.tpl'
                pagebreak="4"
                pager='true'
                pager_template="index_list_pager.tpl"
                require_image=$require_image
                }
            </div>
        {/if}
    </div>
    <div class="down">
        <a href="#"></a>
    </div>
</section>


<section class="features animatedParent">
    <h2 class="animated fadeInUp">{$_conf.mycollectioncaddie_headline_4}</h2>
    <div class="row">
        <div class="box_body">
            <div class="wrap clearfix">
                <div id="list">
                    {if $_conf.mycollectioncaddie_list_5_active == 'on'}
                        {$prefix = jrCore_db_get_prefix("`$_conf.mycollectioncaddie_list_5_type`")}
                        {$require_image = "`$prefix`_image"}
                        {if strlen($_conf.mycollectioncaddie_list_5_ids) > 0}
                            {$s5 = "_item_id in `$_conf.mycollectioncaddie_list_5_ids`"}
                        {/if}
                        {jrCore_list
                        module=$_conf.mycollectioncaddie_list_5_type
                        search=$s5
                        order_by=$_conf.mycollectioncaddie_list_5_order
                        limit="12"
                        template="index_item_5.tpl"
                        require_image=$require_image
                        }
                    {/if}
                </div>
            </div>
        </div>
    </div>
    <div class="down up">
        <a href="#"></a>
    </div>
</section>