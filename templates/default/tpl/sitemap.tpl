{*
    name: Шаблон sitemap
    tpl: main
*}
{include file="header.tpl"}


<div id="container" class="clearfix">
        {include file="left.tpl"}
    	<section id="center">
    		<div id="squeeze">
            
                {if $map}
                    <div class="breadcrumb">{$map}</div>
                {/if}
                
    			<h1>{$content.name}</h1>
                
    			{$urls}
    		</div>
    	</section>
</div>


{include file="footer.tpl"}