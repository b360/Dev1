{jrCore_module_url module="myPEZDatabase" assign="murl"}
<div class="block">

    <div class="title">
        <div class="block_config">
            {jrCore_item_detail_buttons module="myPEZDatabase" item=$item}
        </div>
        <h1>{$item.pezdatabase_title}</h1>

        <div class="breadcrumbs">
            <a href="{$jamroom_url}/{$item.profile_url}/">{$item.profile_name}</a> &raquo;
            <a href="{$jamroom_url}/{$item.profile_url}/{$murl}">{jrCore_lang module="myPEZDatabase" id="10" default="PEZDatabase"}</a> &raquo; {$_post._2|default:"PEZDatabase"}
        </div>
    </div>

    <div class="block_content">

        <div class="item">
            <div class="container">
                <div class="row">
                    <div class="col3">
                        <div class="block_image center">

                            {foreach from=$item item="v" key="k"}
                                {if strpos($k, 'pezdatabase') === 0 && (substr($v,0,6)) == 'image/'}
                                    {assign var="type" value=$k|substr:0:-5}
                                    {jrCore_module_function function="jrImage_display" module="myPEZDatabase" type=$type item_id=$item._item_id size="large" alt=$item.pezdatabase_title width=false height=false class="iloutline img_scale"}
                                    <br>
                                {/if}
                            {/foreach}

                            {jrCore_module_function function="jrRating_form" type="star" module="myPEZDatabase" index="1" item_id=$item._item_id current=$item.pezdatabase_rating_1_average_count|default:0 votes=$item.pezdatabase_rating_1_count|default:0}

                        </div>
                    </div>
                    <div class="col9 last">
                        <div class="p5">
                            <h2>{$item.pezdatabase_title}</h2>
                            {foreach from=$item item="v" key="k"}
                                {assign var="m" value="PEZDatabase"}
                                {assign var="l" value=$m|strlen}
                                {if substr($k,0,$l) == "pezdatabase"}
                                    <span class="info">{$k}:</span> <span class="info_c">{$v}</span><br>
                                {/if}

                            {/foreach}
                        </div>


                        <table class="tg">
                            <h1>Quick Add:</h1>
                            <tr>
                                <th class="tg-yw4l">user is : {$_user._profile_id}</th>
                                <th class="tg-yw4l">profile name: {$_user.profile_name}</th>
                                <th class="tg-yw4l">Databases: {$_user.profile_myPEZ_item_count}</th>

                            </tr>
                            <br><br>
                            <tr>
                                {jrCore_list module="myPEZ" order_by="pez_title desc" limit=3 profile_id="{$_user.profile_id}" template="pez_quickadd.tpl"}
                            </tr>
                        </table>



                    </div>
                </div>
            </div>
        </div>
        {jrCore_item_detail_features module="myPEZDatabase" item=$item}
    </div>

</div>
