<?php /* Smarty version Smarty-3.1.11, created on 2021-08-04 11:04:13
         compiled from "/home/kdr00/kdr.kiev.ua/www/templates/responsive/tpl/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8516714115a324634c2a341-07164444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7ee93bda98d8a2dbb7fa9ed48bfafd263c07ebc' => 
    array (
      0 => '/home/kdr00/kdr.kiev.ua/www/templates/responsive/tpl/header.tpl',
      1 => 1628064107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8516714115a324634c2a341-07164444',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a324634c74773_15262004',
  'variables' => 
  array (
    'title' => 0,
    'description' => 0,
    'keywords' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a324634c74773_15262004')) {function content_5a324634c74773_15262004($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_link_format')) include '/home/kdr00/kdr.kiev.ua/www/system/libraries/smarty/plugins/modifier.link_format.php';
?><!DOCTYPE html>
<html lang="ru">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
        <meta name="generator" content="Visions CMS http://WebVisions.com.ua/" />
        <meta name="distribution" content="GLOBAL" />
        <meta name="revisit-after" content="15 Days" />
        <meta name="robots" content="ALL" />
        <meta name="rating" content="GENERAL" />
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

        <meta name="viewport" content="width=device-width" />

        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('cssDir');?>
style.css?ver=1.006" />
        <link rel="icon" type="image/x-icon" href="<?php echo $_smarty_tpl->getConfigVariable('imgDir');?>
favicon.ico" />
        <link rel="image_src" type="image/png" href="<?php echo $_smarty_tpl->getConfigVariable('imgDir');?>
logo-big.png" />


        <!--[if lte IE 7]><link href="/themes/hb/ie7.css" rel="stylesheet" type="text/css" /><![endif]-->
        <!--[if lt IE 9]><script src="/themes/hb/scripts/ie.js"></script><![endif]-->

		
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
  fbq('init', '198611037587591');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=198611037587591&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

    </head>

    <body>

            <?php echo $_smarty_tpl->getSubTemplate ("system/admin/design/tpl/admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


            <div id="show-hide-menu">
                <a href="/" class="logo"></a>
                <a href="#i" id="show" onclick="this.style.display = 'none';
                        document.getElementById('sidebar-first').style.display = 'block';
                        document.getElementById('hide').style.display = 'block'" title="Открыть меню"></a>
                <a href="#i" id="hide" onclick="this.style.display = 'none';
                        document.getElementById('sidebar-first').style.display = 'none';
                        document.getElementById('show').style.display = 'block'" title="Закрыть меню"></a>
            </div>

            <div id="wrapper">
                <header>
                    <?php if ($_smarty_tpl->tpl_vars['url']->value!='/'){?><a href="/"><?php }?><div id="logo">Восстановление данных Киев: с HDD, флешек в Киеве!</div><?php if ($_smarty_tpl->tpl_vars['url']->value!='/'){?></a><?php }?>
                    <div id="head-flash">
                        <ul>
                            <li>Оплата только за результат</li>
                            <li>Конфидециальность Ваших данных</li>
                            <li>Профессиональное оборудование</li>
                            <li>Более 10 лет на рынке</li>
                        </ul>
                    </div>
                    <div class="contact-text" itemscope itemtype="http://schema.org/LocalBusiness">
                        <meta itemprop="name" content="Восстановление данных Киеве с 2009 года">
                        <a class="hidden" itemprop="url" href="https://kdr.kiev.ua/">Главная</a>
                        <meta itemprop="image" content="https://kdr.kiev.ua<?php echo $_smarty_tpl->getConfigVariable('imgDir');?>
logo-big.png">
                        <p span class="first-number" itemprop="tel">+38 (099) 095-14-04</span>
						 <p span class="first-number" itemprop="tel">+38 (063) 075-93-03</span>
                         <p class="first" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                          <span class="first-number" itemprop="streetAddress">г.Киев, ул.Бориспольская 12-В, офис 8</span>
						   <span class="first-number" itemprop="streetAddress"><p>С ПН по ПТ: с 9-00 до 18-00</span>
						  <meta itemprop="addressLocality" content="Украина, Киев">
                        </p>
                      
                                            </div>
                    <nav id="top-menu">
                        <ul class="menu">
                            
                            <li><a<?php if ($_smarty_tpl->tpl_vars['url']->value=='/vosstanovlenie_dannyx/'){?> class="active"<?php }?> href="<?php echo smarty_modifier_link_format($_smarty_tpl->tpl_vars['url']->value,'/vosstanovlenie_dannyx/');?>
">УСЛУГИ</a></li>
                            <li><a<?php if ($_smarty_tpl->tpl_vars['url']->value=='/rabota_s_regionami.htm'){?> class="active"<?php }?> href="<?php echo smarty_modifier_link_format($_smarty_tpl->tpl_vars['url']->value,'/rabota_s_regionami.htm');?>
">ДОСТАВКА</a></li>
                            <li><a<?php if ($_smarty_tpl->tpl_vars['url']->value=='/reference/'){?> class="active"<?php }?> href="<?php echo smarty_modifier_link_format($_smarty_tpl->tpl_vars['url']->value,'/reference/');?>
">ОТЗЫВЫ</a></li>
                            <li><a<?php if ($_smarty_tpl->tpl_vars['url']->value=='/price.htm'){?> class="active"<?php }?> href="<?php echo smarty_modifier_link_format($_smarty_tpl->tpl_vars['url']->value,'/price.htm');?>
">ЦЕНЫ</a></li>
                          <li><a<?php if ($_smarty_tpl->tpl_vars['url']->value=='/kredit.htm'){?> class="active"<?php }?> href="<?php echo smarty_modifier_link_format($_smarty_tpl->tpl_vars['url']->value,'/kredit.htm');?>
">КРЕДИТ</a></li>
                            <li class="last" id="i"><a<?php if ($_smarty_tpl->tpl_vars['url']->value=='/contacts/'){?> class="active"<?php }?> href="<?php echo smarty_modifier_link_format($_smarty_tpl->tpl_vars['url']->value,'/contacts/');?>
">КОНТАКТЫ</a></li>
                        </ul>
                    </nav>
                </header><?php }} ?>