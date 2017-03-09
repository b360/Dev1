{* /////////// DO NOT REMOVE //////////  *}
{assign var="page_template" value="index"}
{* /////////// DO NOT REMOVE //////////  *}

{jrCore_include template="header.tpl"}


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





{jrCore_include template="footer.tpl"}