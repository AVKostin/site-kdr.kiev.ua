<?php /* Smarty version Smarty-3.1.11, created on 2017-12-17 15:52:58
         compiled from "system/admin/design/tpl/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18452607355a3676ba1fe0b2-98763349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fad57488069fa42ef5b9208521dc69fffaf4be0e' => 
    array (
      0 => 'system/admin/design/tpl/admin.tpl',
      1 => 1513168876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18452607355a3676ba1fe0b2-98763349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a3676ba20f9b1_58369029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3676ba20f9b1_58369029')) {function content_5a3676ba20f9b1_58369029($_smarty_tpl) {?><?php if ($_SESSION['login']){?>
    <!-- Admin zone -->
    <div class="admin-panel<?php if ($_COOKIE['admin_panel']==1){?> hidden<?php }?>">
        <div class="visions"><a href="http://visionscms.com/"><img alt="Посетить сайт Visions CMS" src="/system/admin/design/img/logo_cms.png" height="30" /></a></div>
        <div class="admin-menu">
            <ul>
                <li><a href="/admin.php">Админка</a></li>
                <li><a href="/admin.php#mod=<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
&edit&url=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">Редактировать</a></li>
                <li><a href="#cacheReload" onclick="cacheReload();">Очистить кеш страницы</a></li>
            </ul>
        </div>
    </div>
    <div class="admin-hider"><a></a></div>
    <!-- /Admin zone -->
<?php }?><?php }} ?>