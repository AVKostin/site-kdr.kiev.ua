<?php /* Smarty version Smarty-3.1.11, created on 2021-08-04 11:06:44
         compiled from "/home/kdr00/kdr.kiev.ua/www/templates/responsive/tpl/pub.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2090637455a324634b77ca7-50256759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9223dbffbdcb9b32cbb35a8668508e7cc60a66cf' => 
    array (
      0 => '/home/kdr00/kdr.kiev.ua/www/templates/responsive/tpl/pub.tpl',
      1 => 1628064107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2090637455a324634b77ca7-50256759',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a324634c26bf5_73909307',
  'variables' => 
  array (
    'public' => 0,
    'map' => 0,
    'content' => 0,
    'related' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a324634c26bf5_73909307')) {function content_5a324634c26bf5_73909307($_smarty_tpl) {?>﻿
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<div id="container" class="clearfix">
    <?php echo $_smarty_tpl->getSubTemplate ("left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <section id="center">
        <?php if (!is_array($_smarty_tpl->tpl_vars['public']->value)){?>
            
            <div id="squeeze">
                <?php if ($_smarty_tpl->tpl_vars['map']->value){?>
                    <div class="breadcrumb"><?php echo $_smarty_tpl->tpl_vars['map']->value;?>
</div>
                <?php }?>

                <h1><?php echo $_smarty_tpl->tpl_vars['content']->value['name'];?>
</h1>
                <?php echo $_smarty_tpl->tpl_vars['content']->value['text'];?>


                <br />

                <?php if ($_smarty_tpl->tpl_vars['related']->value){?>
                    <h4>Другие новости по теме:</h4>

                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br />
                    <?php } ?>
                    <br />
                <?php }?>
				
                
                    <noindex>
                        <script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>
<div class="pluso" data-background="none;" data-options="medium,square,line,horizontal,counter,sepcounter=1,theme=14" data-services="facebook,twitter,google,email,livejournal"></div>          
</noindex>
                

                    <noindex>
<div class="fb-comments" data-href="https://kdr.kiev.ua/" data-width="600" data-numposts="5"></div>
</noindex>
                

                
            </div>
        <?php }else{ ?>
            
            <div id="squeeze">
                <?php if ($_smarty_tpl->tpl_vars['map']->value){?>
                    <div class="breadcrumb"><?php echo $_smarty_tpl->tpl_vars['map']->value;?>
</div>
                <?php }?>

                <?php echo $_smarty_tpl->tpl_vars['content']->value['text'];?>

                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['r'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['r']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['name'] = 'r';
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['public']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['r']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['r']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['r']['total']);
?>

                    <h2><a style="color: black;" href="<?php echo $_smarty_tpl->tpl_vars['public']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['public']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['public']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['name'];?>
</a></h2>
                        <?php echo $_smarty_tpl->tpl_vars['public']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['desctext'];?>

                    <br /><a href="<?php echo $_smarty_tpl->tpl_vars['public']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['public']->value[$_smarty_tpl->getVariable('smarty')->value['section']['r']['index']]['name'];?>
"><strong>Подробнее</strong></a>
                    <hr />
                <?php endfor; endif; ?>
            </div>
        <?php }?>
    </section>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>