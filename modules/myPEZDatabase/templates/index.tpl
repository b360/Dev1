{* /////////// DO NOT REMOVE //////////  *}
{assign var="page_template" value="index"}
{* /////////// DO NOT REMOVE //////////  *}

{jrCore_include template="header.tpl"}


<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        font-size: 100%;
    }

    .accordion {
        width: 380px;
        margin: 20px auto;
    }

    .accordion h1, h2, h3, h4 {
        cursor: pointer;
    }

    .accordion h2, h3, h4 {
        font-family: "News Cycle";
    }

    .accordion h1 {
        padding: 15px 20px;
        background-color: #333;
        font-family: Lobster;
        font-size: 1.5rem;
        font-weight: normal;
        color: #1abc9c;
    }

    .accordion h1:hover {
        color: #4afcdc;
    }

    .accordion h1:first-child {
        border-radius: 10px 10px 0 0;
    }

    .accordion h1:last-of-type {
        border-radius: 0 0 10px 10px;
    }

    .accordion h1:not(:last-of-type) {
        border-bottom: 1px dotted #1abc9c;
    }

    .accordion div, .accordion p {
        display: none;
    }

    .accordion h2 {
        padding: 5px 25px;
        background-color: #1abc9c;
        font-size: 1.1rem;
        color: #333;
    }

    .accordion h2:hover {
        background-color: #09ab8b;
    }

    .accordion h3 {
        padding: 5px 30px;
        background-color: #b94152;
        font-size: .9rem;
        color: #ddd;
    }

    .accordion h3:hover {
        background-color: #a93142;
    }

    .accordion h4 {
        padding: 5px 35px;
        background-color: #ffc25a;
        font-size: .9rem;
        color: #af720a;
    }

    .accordion h4:hover {
        background-color: #e0b040;
    }

    .accordion p {
        padding: 15px 35px;
        background-color: #ddd;
        font-family: "Georgia";
        font-size: .8rem;
        color: #333;
        line-height: 1.3rem;
    }

    .accordion .opened-for-codepen {
        display: block;
    }
</style>


<section class="index">
    <div class="overlay"></div>
    <div class="row" style="position: relative; z-index: 1; max-width: 1180px">
        <div class="col4">
            <div class="index_welcome">
                <h1>PEZ</h1>
                {jrCore_list module="myPEZDatabase"  order_by="pezdatabase_series_0 ASC"  group_by="pezdatabase_series_0 UNIQUE" limit=500 template="pez_menu.tpl"}
            </div>
        </div>
        <div class="col8">
            <p>
                What is Lorem Ipsum?

                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>

</section>


THAT ACCORDIAN MENU THING......<BR>


<link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=News+Cycle:400,700' rel='stylesheet' type='text/css'>

{myPEZ_drop_down assign="_pez"}
{jrCore_module_url module="myPEZDatabase" assign="murl"}
{if is_array($_pez)}
    <aside class="accordion">
        {foreach $_pez as $name => $s0}
            {if strlen({$name}) > 0 }
                <h1>{$name} <a href="{$jamroom_url}/{$murl}/list/series_0={$name}" style="float: right;">{jrCore_icon icon="plus" size=20}</a></h1>
                <div>
                    {if is_array($s0.children)}
                        {foreach $s0.children as $label => $s1}
                            {if strlen({$label}) > 0}
                                <h2>{$label} <a href="{$jamroom_url}/{$murl}/list/series_0={$name}/series_1={$label}" style="float: right;">{jrCore_icon icon="plus" size=20}</a></h2>
                                <div>
                                    {if is_array($s1.children)}
                                        {foreach $s1.children as $s1_label => $s2}
                                            {if strlen({$s1_label}) > 0 }
                                                <h3>{$s1_label} <a href="{$jamroom_url}/{$murl}/list/series_0={$name}/series_1={$label}/series_2={$s1_label}" style="float: right;">{jrCore_icon icon="plus" size=20}</a></h3>
                                            {/if}
                                        {/foreach}
                                    {/if}
                                </div>
                            {/if}
                        {/foreach}
                    {/if}
                </div>
            {/if}
        {/foreach}
    </aside>
{/if}

{*<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>*}

<script type="text/javascript">
    var headers = ["H1", "H2", "H3", "H4", "H5", "H6"];

    $(".accordion").click(function(e)
    {
        var target = e.target,
            name   = target.nodeName.toUpperCase();

        if ($.inArray(name, headers) > -1) {
            var subItem = $(target).next();

            //slideUp all elements (except target) at current depth or greater
            var depth = $(subItem).parents().length;
            var allAtDepth = $(".accordion p, .accordion div").filter(function()
            {
                if ($(this).parents().length >= depth && this !== subItem.get(0)) {
                    return true;
                }
            });
            $(allAtDepth).slideUp("fast");

            //slideToggle target content and adjust bottom border if necessary
            subItem.slideToggle("fast", function()
            {
                $(".accordion :visible:last").css("border-radius", "0 0 10px 10px");
            });
            $(target).css({
                "border-bottom-right-radius": "0", "border-bottom-left-radius": "0"
            });
        }
    });
</script>

{jrCore_include template="footer.tpl"}