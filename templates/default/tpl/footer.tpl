<footer>
    <div class=fot-content>
        <div id=foot-block1><p>© 2010-{$smarty.now|date_format:"%Y"} www.kdr.kiev.ua<br>Все права защищены</div>
        <div id=foot-img1><img src="{#imgDir#}footer-flash.png" alt="Восстановление данных с флешки"></div>
        <div id=contact-foot><p>Тел моб.: +38(063)075-93-03  e-mail: info@kdr.kiev.ua Тел:(099)095-14-04</div>
        <div id=foot-img2><img src="{#imgDir#}razrab.png" alt="Восстановление данных с флешки, карт памяти"></div>
    </div>
</footer>

</div>
<div class="scrollup" title="Наверх"></div>
{* <div class="feedback">
<a href="#">Обратная связь</a>
</div>*}

{* Отложенная загрузка JS *}
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="/system/admin/design/js/site.js"></script>
<script src="{#jsDir#}main.js"></script>

{if $smarty.session.login}
    <link rel="stylesheet" type="text/css" href="/system/admin/design/css/panel.css" />
    <script src="/system/admin/design/js/jquery.cookie.js"></script>
    <script src="/system/admin/design/js/panel.js"></script>
{/if}

<!-- Add fancyBox -->
<link rel="stylesheet" href="{#jsDir#}fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="{#jsDir#}fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="{#jsDir#}fancybox/jquery.mousewheel-3.0.6.pack.js"></script>

{if $module == 'main'}
    <script src="{#jsDir#}jquery.bxslider.min.js"></script>
{/if}
{$header_code}


<link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
<script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=ea198962adedbb568b6a7770df221d36" charset="UTF-8" async></script>
<link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
<script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=ea198962adedbb568b6a7770df221d36" charset="UTF-8" async></script>


<!-- Start FastcallAgent code {literal} -->
<script type="text/javascript">
var fca_code = '72a7d13b9029f7ad1d14ec4c0ace5bec';
(function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true; po.charset = 'utf-8';
    po.src = '//ua.cdn.fastcallagent.com/fca.min.js?_='+Date.now();
    var s = document.getElementsByTagName('script')[0];
    if (s) { s.parentNode.insertBefore(po, s); }
    else { s = document.getElementsByTagName('head')[0]; s.appendChild(po); }
})();
</script>
<!-- {/literal} End FastcallAgent code -->
{* End Facebook Pixel Code *}
{literal}
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '627479420762175');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=627479420762175&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
{/literal}
{literal}
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-110506316-1', 'auto');
  ga('require', 'displayfeatures');
  ga('require', 'linkid');
  ga('send', 'pageview');
 /* Accurate bounce rate by time */
 if (!document.referrer ||
 document.referrer.split('/')[2].indexof(location.hoctname) != 0)
 setTimeout(function(){
 ga('send', 'event','Новый посетитель',location.pathname);
 },15000);
</script>
{/literal}

{* Google Code for KDR Conversion Page *}
{literal}
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-31237114-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-31237114-1');
</script>

{/literal}

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter14128423 = new Ya.Metrika({
                    id:14128423,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true,
                    ecommerce:"dataLayer"
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/14128423" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


{*    <div class="copy"><a href="http://kdr.kiev.ua/sitemap/">Карта сайта</a></div>*}
</body>
</html>