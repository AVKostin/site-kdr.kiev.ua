<?php /* Smarty version Smarty-3.1.11, created on 2021-08-04 11:04:13
         compiled from "/home/kdr00/kdr.kiev.ua/www/templates/responsive/tpl/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16690805085a32466e8ef052-23138297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd87c2c62e97676521bb5ccd7658a0bb6245c9fa7' => 
    array (
      0 => '/home/kdr00/kdr.kiev.ua/www/templates/responsive/tpl/main.tpl',
      1 => 1628064107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16690805085a32466e8ef052-23138297',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a32466e929173_12678069',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a32466e929173_12678069')) {function content_5a32466e929173_12678069($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<div id="container" class="clearfix">
    <?php echo $_smarty_tpl->getSubTemplate ("left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <section id="center">

        <div id="squeeze">

            
            <ul class="bxslider">
                <a href="/flesh/"
                       title="Восстановление данных с флешеки"><img src="/files/modules/slider/1.jpg" alt="Восстановление данных с флешеки Киев" /></a>
                <a href="/card/"
                       title="Восстановление данных с карты памяти"><img src="/files/modules/slider/2.jpg" alt="Восстановление данных с карты памяти Киев" /></a>
                <a href="/vosstanovlenie_dannyx/vosstanovlenie_dannyx_s_monolitnyx_fleshek.htm"
                       title="Восстановление данных с монолитных накопителей"><img src="/files/modules/slider/3.jpg" alt="Восстановление данных MicroSD Киев" /></a>
					<a href="/rabota_s_regionami.htm"
                       title="Восстановление данных по всей Украине"><img src="/files/modules/slider/4_.jpg" alt="Восстановление данных по всей Украине" /></a>
			<a href="/hdd/"
                       title="Восстановление данных с жестких дисков"><img src="/files/modules/slider/hdd.jpg" alt="Восстановление данных с жестких дисков Киев" /></a>
					   <a href="/recovery-ssd/"
                       title="Восстановление данных SSD"><img src="/files/modules/slider/ssd1.jpg" alt="Восстановление данных  SSD" /></a>
            </ul>
            

            <?php echo $_smarty_tpl->tpl_vars['content']->value['main_about'];?>

        </div>
    </section>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>