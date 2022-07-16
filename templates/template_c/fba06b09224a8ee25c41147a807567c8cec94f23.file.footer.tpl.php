<?php /* Smarty version Smarty-3.1.11, created on 2021-08-04 11:04:13
         compiled from "/home/kdr00/kdr.kiev.ua/www/templates/responsive/tpl/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13717390585a324634cbdcf0-83045985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fba06b09224a8ee25c41147a807567c8cec94f23' => 
    array (
      0 => '/home/kdr00/kdr.kiev.ua/www/templates/responsive/tpl/footer.tpl',
      1 => 1628064107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13717390585a324634cbdcf0-83045985',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a324634ce2961_71769715',
  'variables' => 
  array (
    'url' => 0,
    'module' => 0,
    'header_code' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a324634ce2961_71769715')) {function content_5a324634ce2961_71769715($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/kdr00/kdr.kiev.ua/www/system/libraries/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_link_format')) include '/home/kdr00/kdr.kiev.ua/www/system/libraries/smarty/plugins/modifier.link_format.php';
?><footer>
    <div class=fot-content>
        <div id=foot-block1><p>© 2009-<?php echo smarty_modifier_date_format(time(),"%Y");?>
 www.kdr.kiev.ua<br>Все права защищены</div>
<li><a<?php if ($_smarty_tpl->tpl_vars['url']->value=='/vosstanovlenie_dannyx/'){?> class="active"<?php }?> href="<?php echo smarty_modifier_link_format($_smarty_tpl->tpl_vars['url']->value,'/vosstanovlenie_dannyx/');?>
">Публичная Оферта</a></li>
        <div id=foot-img1><img src="<?php echo $_smarty_tpl->getConfigVariable('imgDir');?>
footer-flash.png" alt="Восстановление данных Киев: с HDD, флешек, карт памяти, Android"></div>
        <center><p span class="first-number" itemprop="tel"><p>+38 (099) 095-14-04</p></span></center>
		<center><p span class="first-number" itemprop="tel"><p>+38 (063) 075-93-03</p></span></center>
		<center><p span class="first-number" itemprop="streetAddress">г.Киев, ул.Бориспольская 12-В, офис 8</span></center>
        <center><meta itemprop="addressLocality" content="Украина, Киев"></center>
	        <div id=foot-img2><img src="<?php echo $_smarty_tpl->getConfigVariable('imgDir');?>
razrab.png" alt="Восстановление данных Киев : флешки, карт памяти, HDD"></div>
    </div>
</footer>

</div>
<div class="scrollup" title="Наверх"></div>



<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="/system/admin/design/js/site.js"></script>
<script src="<?php echo $_smarty_tpl->getConfigVariable('jsDir');?>
main.js"></script>

<?php if ($_SESSION['login']){?>
    <link rel="stylesheet" type="text/css" href="/system/admin/design/css/panel.css" />
    <script src="/system/admin/design/js/jquery.cookie.js"></script>
    <script src="/system/admin/design/js/panel.js"></script>
<?php }?>

<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('jsDir');?>
fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('jsDir');?>
fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('jsDir');?>
fancybox/jquery.mousewheel-3.0.6.pack.js"></script>

<?php if ($_smarty_tpl->tpl_vars['module']->value=='main'){?>
    <script src="<?php echo $_smarty_tpl->getConfigVariable('jsDir');?>
jquery.bxslider.min.js"></script>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['header_code']->value;?>


<script src="//code.jivosite.com/widget/jRzQRjM2J7" async></script>

<!-- Start FastcallAgent code  -->
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
<!--  End FastcallAgent code -->

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
</html><?php }} ?>