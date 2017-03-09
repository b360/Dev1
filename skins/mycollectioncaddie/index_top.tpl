{assign var=unique_id value=1|mt_rand:4}

<section class="index">
    <div>
        {if jrCore_is_mobile_device()}
            {jrCore_image image="slide_`$unique_id`_mobile.jpg" width="680" class="img_scale"}
        {else}
            {jrCore_image image="slide_`$unique_id`.jpg" width="1903" class="img_scale"}
        {/if}
    </div>

    <div class="overlay">
        <div class="wrap">
            <div class="row">
                <h1>{$_conf.mycollectioncaddie_headline_1}</h1>
                <p>{$_conf.mycollectioncaddie_headline_text}</p>
            </div>
        </div>
    </div>
    <div class="down">
        <a href="#"></a>
    </div>
</section>