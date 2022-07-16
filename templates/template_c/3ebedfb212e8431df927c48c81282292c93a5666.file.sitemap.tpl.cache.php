<?php /* Smarty version Smarty-3.1.11, created on 2017-12-17 15:52:58
         compiled from "/home/kdr00/kdr.kiev.ua/www/templates/responsive/tpl/sitemap.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2765484635a3676ba138926-21552198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ebedfb212e8431df927c48c81282292c93a5666' => 
    array (
      0 => '/home/kdr00/kdr.kiev.ua/www/templates/responsive/tpl/sitemap.tpl',
      1 => 1513168944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2765484635a3676ba138926-21552198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'map' => 0,
    'content' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a3676ba1ab8e6_01493131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3676ba1ab8e6_01493131')) {function content_5a3676ba1ab8e6_01493131($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>



<div id="container" class="clearfix">
        <?php echo $_smarty_tpl->getSubTemplate ("left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    	<section id="center">
    		<div id="squeeze">
            
                <?php if ($_smarty_tpl->tpl_vars['map']->value){?>
                    <div class="breadcrumb"><?php echo $_smarty_tpl->tpl_vars['map']->value;?>
</div>
                <?php }?>
                
    			<h1><?php echo $_smarty_tpl->tpl_vars['content']->value['name'];?>
</h1>
                
    			<?php echo $_smarty_tpl->tpl_vars['urls']->value;?>

    		</div>
    	</section>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>