<?php /* Smarty version Smarty-3.1.11, created on 2021-08-04 11:04:13
         compiled from "system/admin/design/tpl/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19226146515a324634c76c20-88184468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fad57488069fa42ef5b9208521dc69fffaf4be0e' => 
    array (
      0 => 'system/admin/design/tpl/admin.tpl',
      1 => 1628064105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19226146515a324634c76c20-88184468',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a324634c84b91_67921623',
  'variables' => 
  array (
    'module' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a324634c84b91_67921623')) {function content_5a324634c84b91_67921623($_smarty_tpl) {?><?php if ($_SESSION['login']){?>
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