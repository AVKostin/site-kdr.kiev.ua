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
                {if $error}<p class="red">{$error}</p><hr />{/if}
                <a class="revie-button" onclick="$('#review-form').toggle()">Оставить отзыв</a>

                <form enctype="multipart/form-data" class="forma" method="POST" name="forma" id="review-form"{if $error} style="display: block"{/if}>
                    <h2><span>Отправить отзыв</span></h2>
                    <p><label>Имя:*</label><input class="text" type="text" name="name" required=""></p>
                    <p><label>Организация:*</label><input class="text" type="text" name="org" required=""></p>
                    <p><label>Ваш e-mail:*</label><input class="text" type="text" name="email" required=""></p>
                    <p class="ph">
                        <label>Фотография:</label>
                        <input type="text" id="filename" value="файл не выбран" disabled="disabled" />
                        <input type="file" id="addf" onchange="ChangeFile()" name="f">
                        <a id="addfile" onclick="document.getElementById('addf').click();">Выбрать файл</a>
                    </p>
                    <p class="rt">Оценить нашу работу: 
                        <span class="rate">
                            <input name="rating" type="checkbox" checked="checked" value="1" id="rate1" onclick="Rate(1)" /><label for="rate1"></label>
                            <input name="rating" type="checkbox" value="2" id="rate2" onclick="Rate(2)" /><label for="rate2"></label>
                            <input name="rating" type="checkbox" value="3" id="rate3" onclick="Rate(3)" /><label for="rate3"></label>
                            <input name="rating" type="checkbox" value="4" id="rate4" onclick="Rate(4)" /><label for="rate4"></label>
                            <input name="rating" type="checkbox" value="5" id="rate5" onclick="Rate(5)" /><label for="rate5"></label>
                        </span>
                    </p>
                    <p>Ваш отзыв:</p>
                    <p><textarea class="text" name="aboutme" cols="26" rows="5" required=""></textarea></p>
                    <textarea class="hidden" name="text"></textarea>
                    <p class="last"><input type="submit" name="go" value="Отправить">
                    </p>
                </form>

                {if $submit}<p class="red">Спасибо за Ваш отзыв!</p><hr />{/if}

                {foreach from=$reviews item=r}
                    <div class="item">
                        {if $r.type}<div class="pic"><img src="/files/modules/review/{$r.id}.{$r.type}" alt="" /></div>{/if}
                        <div class="text">
                            <div class="row"><span>ФИО:</span> {$r.name}</div>
                            {if $r.org}<div class="row"><span>Организация:</span> {$r.org}</div>{/if}
                            <div class="date">{$r.date|date_format:$smarty.config.dateformat}</div>
                            <p>{$r.text}</p>
                        </div>
                        <div class="fc"></div>
                    </div>
                    <hr />
                {/foreach}


                {literal}
                    <div id="disqus_thread"></div>
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
                {/literal}

            </div>
            <!-- Put this div tag to the place, where the Comments block will be -->
        </div>
    </section>
</div>


{include file="footer.tpl"}