<?php /* Smarty version Smarty-3.1.11, created on 2021-08-04 11:04:13
         compiled from "/home/kdr00/kdr.kiev.ua/www/templates/responsive/tpl/left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3209555895a324634c86667-53650642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9cb85e88047ffcaf593cf91b147e66471fc5d41' => 
    array (
      0 => '/home/kdr00/kdr.kiev.ua/www/templates/responsive/tpl/left.tpl',
      1 => 1628064107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3209555895a324634c86667-53650642',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a324634cb83d8_91319101',
  'variables' => 
  array (
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a324634cb83d8_91319101')) {function content_5a324634cb83d8_91319101($_smarty_tpl) {?><?php if (!is_callable('smarty_function_get_file')) include '/home/kdr00/kdr.kiev.ua/www/system/libraries/smarty/plugins/function.get_file.php';
?>﻿<aside id="sidebar-first">
    <!--Меню Восстановление данных-->
    <nav id="left-menu-vosstanovlenie" class="block">
        <h2>Восстановление данных:</h2>
        <ul class="menu">
            <li><a<?php if ($_smarty_tpl->tpl_vars['url']->value=='/flesh/'){?> class="active"<?php }?> href="/flesh/">Восстановление флешки</a></li>
            <li><a<?php if ($_smarty_tpl->tpl_vars['url']->value=='/card/'){?> class="active"<?php }?> href="/card/">Восстановление карт памяти</a></li>
			<li><a<?php if ($_smarty_tpl->tpl_vars['url']->value=='/hdd/'){?> class="active"<?php }?> href="/hdd/">Восстановление HDD</a></li>
            <li><a<?php if ($_smarty_tpl->tpl_vars['url']->value=='/card/MicroSD.htm'){?> class="active"<?php }?> href="/card/MicroSD.htm">С microSD (монолиты)</a></li>
            <li><a<?php if ($_smarty_tpl->tpl_vars['url']->value=='/vosstanovlenie_dannyx_s_telefonov.htm'){?> class="active"<?php }?> href="/vosstanovlenie_dannyx_s_telefonov.htm">C телефонов</a></li>
            <li><a<?php if ($_smarty_tpl->tpl_vars['url']->value=='/recovery-ssd/'){?> class="active"<?php }?> href="/recovery-ssd/">С SSD</a></li>
			<li><a<?php if ($_smarty_tpl->tpl_vars['url']->value=='/raid/'){?> class="active"<?php }?> href="/raid/">RAID массив</a></li>
                  </ul>
    </nav>

    <nav id=left-menu-inform class="block">
        <h2>Полезная информация:</h2>
        <ul class="menu">
		<li class="first"><a href="/partners/">Работа с партнерами</a></li>
		<li><a href="/cases">НАШЫ РАБОТЫ</a></li>
		<li><a href="/equipment">Наша Лаборатория</a></li>
<li><a href="/about.htm">Кто такие Kiev Data Recovery</a></li>
<li><a href="/news/metodika_vosstanovlenie_fajlov_s_fleshki.htm">Наша методика восстановление данных с флешек</a></li>
		<li><a href="/algoritm.htm">Алгоритм работы с клиентами</a></li>
            <li><a href="/tipy_korpusov_chipov_pamjati.htm">Типы корпусов чипов памяти</a></li>
            <li><a href="/konfidentsialnost.htm">Конфиденциальность данных</a></li>
            <li><a href="/polomki_nakopitelej_i_vozmozhnost_vosstanovlenija_dannyx.htm">Неисправности флешек</a></li>
            <li><a href="/neispravnosti_kart_pamjati.htm">Неисправности карт памяти</a></li>
            <li><a href="/faq_hdd.htm">HDD: Часто задаваемые вопросы</a></li>
            <li class="last"><a href="/faq.htm">Флешки: Часто задаваемые вопросы</a></li>

        </ul>
    </nav>
            <?php echo smarty_function_get_file(array('dir'=>$_smarty_tpl->getConfigVariable('php'),'file'=>"news.php"),$_smarty_tpl);?>

			<!--Меню Социалки-->
    <nav id="left-menu-vosstanovlenie" class="block">
        <!--<h2>Мы в социальных сетях:</h2>
        <ul class="menu">
<br><p><a href="https://search.google.com/local/writereview?placeid=ChIJT_vojfXO1EARN3g47Zqkoq4" target="_blank"><img style="display: block; margin-left: auto; margin-right: auto;" src="/templates/responsive/img/gmb.jpg" alt="Наша страничка в Google Бизнес" /></a>&nbsp;</p>
<br><p><a href="https://www.facebook.com/kievdatarecovey/" target="_blank"><img style="display: block; margin-left: auto; margin-right: auto;" src="/templates/responsive/img/fb.JPG" alt="Наша страничка в Facebook" /></a>&nbsp;</p>
<div id="fb-root"></div> <script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v3.1&appId=247870932709853&autoLogAppEvents=1';  fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
-->
</aside><?php }} ?>