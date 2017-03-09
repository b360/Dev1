{if isset($_items)}
    {foreach from=$_items item="item"}
        {mycollectioncaddie_process_item item=$item module=$_conf.mycollectioncaddie_list_3_type assign="_item"}
        <div class="col3 index_item">
            <div class="wrap">
                <div style="position: relative;">
                    <a href="{$jamroom_url}/store/cat={$item.product_category_url}">
                        {jrCore_module_function
                        function="jrImage_display"
                        module=$_item.module
                        type=$_item.image_type
                        item_id=$_item._item_id
                        size="xxxlarge"
                        crop="4:3"
                        class="img_scale"
                        alt=$_item.title
                        width=false
                        height=false
                        }</a>
                </div>
                <span class="category_title">
                    {$item.product_category}
                </span>
            </div>
        </div>
    {/foreach}
{/if}