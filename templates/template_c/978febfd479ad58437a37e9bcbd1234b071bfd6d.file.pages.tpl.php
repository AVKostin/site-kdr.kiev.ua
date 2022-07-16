<?php /* Smarty version Smarty-3.1.11, created on 2021-08-04 11:15:11
         compiled from "/home/kdr00/kdr.kiev.ua/www/templates/responsive/tpl/pages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6770943705a324a46349f07-21423625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '978febfd479ad58437a37e9bcbd1234b071bfd6d' => 
    array (
      0 => '/home/kdr00/kdr.kiev.ua/www/templates/responsive/tpl/pages.tpl',
      1 => 1628064107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6770943705a324a46349f07-21423625',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a324a4638d310_00439253',
  'variables' => 
  array (
    'map' => 0,
    'content' => 0,
    'reviews' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a324a4638d310_00439253')) {function content_5a324a4638d310_00439253($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/kdr00/kdr.kiev.ua/www/system/libraries/smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/kdr00/kdr.kiev.ua/www/system/libraries/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) include '/home/kdr00/kdr.kiev.ua/www/system/libraries/smarty/plugins/modifier.replace.php';
?>﻿
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="container" class="clearfix">
    <?php echo $_smarty_tpl->getSubTemplate ("left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <section id="center">
        <div id="squeeze">

            <?php if ($_smarty_tpl->tpl_vars['map']->value){?>
                <div class="breadcrumb"><?php echo $_smarty_tpl->tpl_vars['map']->value;?>
</div>
            <?php }?>

            <h1><?php echo $_smarty_tpl->tpl_vars['content']->value['name'];?>
</h1>

            <?php $_smarty_tpl->_capture_stack[0][] = array("reviews", null, null); ob_start(); ?>
            <?php if ($_smarty_tpl->tpl_vars['reviews']->value){?>
                <div class="content-reviews">
                    <a target="_blank" href="/reference/"><h3>Отзывы о нас</h3></a>
                    <div class="items">
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                            <div class="item">
                                <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value['text'],150);?>
</p>
                                <div class="more">
                                    <span class="name"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span>
                                    <span class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['date'],"%d.%m.%Y");?>
</span>
<p style="text-align: center;"><a title="Отзывы на Google картах" href="https://www.google.com.ua/search?ei=TXkDXZvKCo_MrgTxuLn4BA&amp;q=%D0%A6%D0%B5%D0%BD%D1%82%D1%80+%D0%B2%D0%BE%D1%81%D1%81%D1%82%D0%B0%D0%BD%D0%BE%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D1%8F+%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D0%B8+kdr.kiev.ua&amp;oq=%D0%A6%D0%B5%D0%BD%D1%82%D1%80+%D0%B2%D0%BE%D1%81%D1%81%D1%82%D0%B0%D0%BD%D0%BE%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D1%8F+%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D0%B8+kdr.kiev.ua&amp;gs_l=psy-ab.3...264030.267533..267703...1.0..0.180.1737.1j11......0....1..gws-wiz.......35i39j33i160.NWs0UKxJGSo#lrd=0x40d4cef58de8fb4f:0xaea2a49aed387837,1,,,"><span><img title="Google Отзывы" src="/files/shared/google_ref.jpg" alt="Google Отзывы" width="180" height="199" /></span></a></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php }?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            
            <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['content']->value['text'],'__reviews__',Smarty::$_smarty_vars['capture']['reviews']);?>


        </div>
    </section>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>