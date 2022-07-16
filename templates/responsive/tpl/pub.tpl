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

                {if $related}
                    <h4>Другие новости по теме:</h4>

                    {foreach from=$related item=item}
                        <a href="{$item.url}">{$item.name}</a><br />
                    {/foreach}
                    <br />
                {/if}
				
                {literal}
                    <noindex>
                        <script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>
<div class="pluso" data-background="none;" data-options="medium,square,line,horizontal,counter,sepcounter=1,theme=14" data-services="facebook,twitter,google,email,livejournal"></div>          
</noindex>
                {/literal}
{literal}
                    <noindex>
<div class="fb-comments" data-href="https://kdr.kiev.ua/" data-width="600" data-numposts="5"></div>
</noindex>
                {/literal}

                {* {literal}
                    <div id="disqus_thread"></div>
                    <noindex>
                        <script type="text/javascript">
                            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                            var disqus_shortname = 'kievdatarecovery'; // required: replace example with your forum shortname

                            /* * * DON'T EDIT BELOW THIS LINE * * */
                            (function () {
                                var dsq = document.createElement('script');
                                dsq.type = 'text/javascript';
                                dsq.async = true;
                                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                            })();
                        </script>
                    </noindex>
                    <noindex>
                        <script type="text/javascript">
                            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                            var disqus_shortname = 'kievdatarecovery'; // required: replace example with your forum shortname

                            /* * * DON'T EDIT BELOW THIS LINE * * */
                            (function () {
                                var s = document.createElement('script');
                                s.async = true;
                                s.type = 'text/javascript';
                                s.src = '//' + disqus_shortname + '.disqus.com/count.js';
                                (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
                            }());
                        </script>
                    </noindex>
                {/literal} *}
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