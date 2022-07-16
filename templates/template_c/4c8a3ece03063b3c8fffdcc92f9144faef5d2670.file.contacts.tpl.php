<?php /* Smarty version Smarty-3.1.11, created on 2021-08-04 13:21:48
         compiled from "/home/kdr00/kdr.kiev.ua/www/templates/responsive/tpl/contacts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8467311565a329457716c01-37451768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c8a3ece03063b3c8fffdcc92f9144faef5d2670' => 
    array (
      0 => '/home/kdr00/kdr.kiev.ua/www/templates/responsive/tpl/contacts.tpl',
      1 => 1628064107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8467311565a329457716c01-37451768',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a3294578a00b2_21596459',
  'variables' => 
  array (
    'map' => 0,
    'slang' => 0,
    'url' => 0,
    'content' => 1,
    'conf' => 0,
    'mf' => 0,
    'tel' => 0,
    'email' => 0,
    'mail' => 0,
    'FeedbackInfo' => 1,
    'FeedbackHide' => 1,
    'form' => 1,
    'co' => 1,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3294578a00b2_21596459')) {function content_5a3294578a00b2_21596459($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/kdr00/kdr.kiev.ua/www/system/libraries/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_function_mailto')) include '/home/kdr00/kdr.kiev.ua/www/system/libraries/smarty/plugins/function.mailto.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<div id="container" class="clearfix">
	<?php echo $_smarty_tpl->getSubTemplate ("left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<section id="center">
		<div id="squeeze">
        
            <?php if ($_smarty_tpl->tpl_vars['map']->value){?>
                <div class="breadcrumb"><?php echo $_smarty_tpl->tpl_vars['map']->value;?>
</div>
            <?php }?>
            
			<div class="text<?php if ($_SESSION['login']){?> admin-editable" 
                    editurl="lang=<?php echo $_smarty_tpl->tpl_vars['slang']->value;?>
&mod=contacts&speededit=text&update=.text&url=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
<?php }?>">
                <?php echo $_smarty_tpl->tpl_vars['content']->value['text'];?>

                </div>

                <?php if ($_smarty_tpl->tpl_vars['conf']->value['Microformats']){?>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['f'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['f']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['name'] = 'f';
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['mf']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total']);
?>
                <?php if ($_smarty_tpl->tpl_vars['mf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['hname']){?><h3><?php echo $_smarty_tpl->tpl_vars['mf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['hname'];?>
</h3><?php }?>
                <div class="vcard">
                <div class="fl" style="width:49%">
                  <p><?php if ($_smarty_tpl->tpl_vars['mf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['contface']){?><h3><?php echo $_smarty_tpl->tpl_vars['mf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['contface'];?>
:</h3><?php }?>
                  <span class="fn n">
                  <?php if ($_smarty_tpl->tpl_vars['mf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['given_name']){?>
                  <span class="given-name"><?php echo $_smarty_tpl->tpl_vars['mf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['given_name'];?>
</span><?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['mf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['additional_name']){?>
                  <span class="additional-name"><?php echo $_smarty_tpl->tpl_vars['mf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['additional_name'];?>
</span><?php }?>
                  </p>
                  </span>
                                
                 <p><?php if ($_smarty_tpl->tpl_vars['mf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['telname']){?><h3><?php echo $_smarty_tpl->tpl_vars['mf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['telname'];?>
:</h3><?php }?>
                  <?php $_smarty_tpl->tpl_vars['tel'] = new Smarty_variable($_smarty_tpl->tpl_vars['mf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['tel'], null, 0);?>
                  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['s'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['s']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['name'] = 's';
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tel']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total']);
?>
                   <?php if ($_smarty_tpl->tpl_vars['tel']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['name']){?><i><?php echo $_smarty_tpl->tpl_vars['tel']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['name'];?>
:</i> <?php }?><span class="tel"><?php echo $_smarty_tpl->tpl_vars['tel']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['tel'];?>
</span><br />
                  <?php endfor; endif; ?>
                 </p>
                 </div>

                 <p><?php if ($_smarty_tpl->tpl_vars['mf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['emails']){?><h3><?php echo $_smarty_tpl->tpl_vars['mf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['emails'];?>
:</h3><?php }?>
                  <?php $_smarty_tpl->tpl_vars['email'] = new Smarty_variable($_smarty_tpl->tpl_vars['mf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['email'], null, 0);?>
                  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['e'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['e']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['name'] = 'e';
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['email']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['e']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['e']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['e']['total']);
?>
                   <?php $_smarty_tpl->tpl_vars['mail'] = new Smarty_variable($_smarty_tpl->tpl_vars['email']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['mail'], null, 0);?>
                   <?php if ($_smarty_tpl->tpl_vars['email']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['name']){?><i><?php echo $_smarty_tpl->tpl_vars['email']->value[$_smarty_tpl->getVariable('smarty')->value['section']['e']['index']]['name'];?>
:</i> <?php }?><a class="email" href="mailto:<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mail']->value, 'hex');?>
"><?php echo smarty_function_mailto(array('address'=>((string)$_smarty_tpl->tpl_vars['mail']->value),'encode'=>"javascript"),$_smarty_tpl);?>
</a><br />
                  <?php endfor; endif; ?>
                 </p>
<literal>
                 <p><?php if ($_smarty_tpl->tpl_vars['mf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['web']){?><h3><?php echo $_smarty_tpl->tpl_vars['mf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['web'];?>
:</h3><?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['mf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['skype']){?>
                  <i>Skype:</i> <a class="url" href="skype:LOGIN?chat"><?php echo $_smarty_tpl->tpl_vars['mf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['skype'];?>
</a><br /><?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['mf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['jabber']){?>
                  <?php $_smarty_tpl->tpl_vars['mail'] = new Smarty_variable($_smarty_tpl->tpl_vars['mf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['jabber'], null, 0);?>
                  <i>Jabber:</i> <a class="url" href="xmpp:<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mail']->value, 'hex');?>
"><?php echo smarty_function_mailto(array('address'=>((string)$_smarty_tpl->tpl_vars['mail']->value),'encode'=>"javascript"),$_smarty_tpl);?>
</a><?php }?>
                 </p>
                </div>
                <?php endfor; endif; ?>
                <?php }?>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2541.7323340715275!2d30.66545581598339!3d50.427458479472065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cef58de8fb4f%3A0xaea2a49aed387837!2z0JLQvtGB0YHRgtCw0L3QvtCy0LvQtdC90LjQtSDQtNCw0L3QvdGL0YUgS2lldiBEYXRhIFJlY292ZXJ5!5e0!3m2!1sru!2sua!4v1497356689788" width="600" height="243" frameborder="0" style="border:0" allowfullscreen></iframe>
</literal>				
                <?php if ($_smarty_tpl->tpl_vars['conf']->value['Feedback']){?>
                <h2 id="Feedback"><?php echo $_smarty_tpl->tpl_vars['content']->value['FeedbackName'];?>
</h2>
                <?php if ($_smarty_tpl->tpl_vars['FeedbackInfo']->value){?><p><?php echo $_smarty_tpl->tpl_vars['FeedbackInfo']->value;?>
</p><?php }?>
                    <?php if (!$_smarty_tpl->tpl_vars['FeedbackHide']->value){?>
                    <div class="forma" style="width:100%;">
                    <?php $_smarty_tpl->tpl_vars['co'] = new Smarty_variable(0, true, 0);?>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['f'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['f']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['name'] = 'f';
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['form']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['f']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['f']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['f']['total']);
?>
                        <?php if ($_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['type']!='hidden'){?>
                        <div class="element f50<?php if ($_smarty_tpl->tpl_vars['co']->value%2){?> second<?php }?><?php if ($_POST['go']&&$_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['invalid']){?> invalid<?php }?>">
                            <?php if ($_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['name']){?><label for="<?php echo $_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['rew'];?>
"><?php echo $_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['name'];?>
:</label>
                                <?php if ($_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['desc']){?> <span>(<?php echo $_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['desc'];?>
)</span><?php }?><br />
                            <?php }?>
                            <?php echo $_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['inp'];?>

                        </div>
                        <?php $_smarty_tpl->tpl_vars['co'] = new Smarty_variable($_smarty_tpl->tpl_vars['co']->value+1, true, 0);?>
                        <?php }else{ ?>
                        <?php echo $_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->getVariable('smarty')->value['section']['f']['index']]['inp'];?>

                        <?php }?>
                    <?php endfor; endif; ?>
                    </div>
                    <?php }?>
                <?php }?>
		</div>
	</section>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>