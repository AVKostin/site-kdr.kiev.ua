<footer>
    <div class=fot-content>
        <div id=foot-block1><p>© 2009-{$smarty.now|date_format:"%Y"} www.kdr.kiev.ua<br>Все права защищены</div>
<li><a{if $url == '/vosstanovlenie_dannyx/'} class="active"{/if} href="{$url|link_format:'/vosstanovlenie_dannyx/'}">Публичная Оферта</a></li>
        <div id=foot-img1><img src="{#imgDir#}footer-flash.png" alt="Восстановление данных Киев: с HDD, флешек, карт памяти, Android"></div>
        <center><p span class="first-number" itemprop="tel"><p>+38 (099) 095-14-04</p></span></center>
		<center><p span class="first-number" itemprop="tel"><p>+38 (063) 075-93-03</p></span></center>
		<center><p span class="first-number" itemprop="streetAddress">г.Киев, ул.Бориспольская 12-В, офис 8</span></center>
        <center><meta itemprop="addressLocality" content="Украина, Киев"></center>
	        <div id=foot-img2><img src="{#imgDir#}razrab.png" alt="Восстановление данных Киев : флешки, карт памяти, HDD"></div>
    </div>
</footer>

</div>
<div class="scrollup" title="Наверх"></div>
{* <div class="feedback">
<a href="#">Обратная связь</a>
</div>*}

{* Отложенная загрузка JS *}
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
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
{literal}
<script src="//code.jivosite.com/widget/jRzQRjM2J7" async></script>
{/literal}
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
  fbq('init', '152180196055200');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=152180196055200&ev=PageView&noscript=1"
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

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js", "ym");

   ym(14128423, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        trackHash:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/14128423" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
{/literal}


{* Код тега ремаркетинга Google
<!--------------------------------------------------
С помощью тега ремаркетинга запрещается собирать информацию, по которой можно идентифицировать личность пользователя. Также запрещается размещать тег на страницах с контентом деликатного характера. Подробнее об этих требованиях и о настройке тега читайте на странице http://google.com/ads/remarketingsetup.
--------------------------------------------------->*}
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 939052228;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/939052228/?value=0&guid=ON&script=0"/>
</div>
</noscript>


</body>
</html>