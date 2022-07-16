{*
name: Шаблон отзывов
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

            <div class="reviews">
                <hr />
                
                {if $submit}<p class="red">Спасибо за Ваш отзыв!</p><hr />{/if}

                {foreach from=$reviews item=r}
                    <div class="item">
                        <div class="fio">ФИО: {$r.name}</div>
                        <div class="date">{$r.date|date_format:$smarty.config.dateformat}</div>
                        <p>{$r.text}</p>
                    </div>
                    <hr />
                {/foreach}
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
                {if $error}<p class="red">{$error}</p><hr />{/if}
                <form class="forma" method="POST" name="forma">
                    <h2>Отправить отзыв</h2>
                    <p>Имя: <input class="text" type="text" name="name" required></p>
                    <p class=name>Сообщение: 
                    <p><textarea class="text" name="aboutme" cols="26" rows="5" required></textarea></p>
                    <textarea class="hidden" name="text"></textarea>
                    <div class="center"><input class="form" type="submit" name="go" value=""></div>
                </form>
            </div>
<!-- Put this div tag to the place, where the Comments block will be -->
        </div>
    </section>
</div>


{include file="footer.tpl"}