{*
    name: Шаблон модуля публикации
    tpl: main
*}
{include file="header.tpl"}


<div id="container" class="clearfix">
	{include file="left.tpl"}
	<section id="center">
        {if !is_array($public)}
            {* Вывод записи статьи *}
            <div id="squeeze">
                {if $map}
                    <div class="breadcrumb">{$map}</div>
                {/if}
                
    			<h1>{$content.name}</h1>
    			{$content.text}
                
                <br />
			
{literal}
<script crossorigin="anonymous" async type="text/javascript" src="//api.pozvonim.com/widget/callback/v3/31c83d777102f128168d59d68a16ca14/connect" id="check-code-pozvonim" charset="UTF-8"></script>
{/literal}
{literal}
               <script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script><div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="big" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,moimir" data-yashareTheme="counter"></div>
{/literal}
{literal}
<div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'kievdatarecovery'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'kievdatarecovery'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
    </script>
	{/literal}
    		</div>
        {else}
        {* Вывод всех статей с указанного раздела *}
            <div id="squeeze">
                {if $map}
                    <div class="breadcrumb">{$map}</div>
                {/if}
                
                {$content.text}
            {section name=r loop=$public}
                
    			<h2><a style="color: black;" href="{$public[r].url}" title="{$public[r].name}">{$public[r].name}</a></h2>
    			{$public[r].desctext}
                <br /><a href="{$public[r].url}" title="{$public[r].name}"><strong>Подробнее</strong></a>
                <hr />
            {/section}
            </div>
        {/if}
	</section>
</div>


{include file="footer.tpl"}