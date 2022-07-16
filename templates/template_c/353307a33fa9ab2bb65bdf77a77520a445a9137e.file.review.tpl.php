<?php /* Smarty version Smarty-3.1.11, created on 2021-08-04 15:08:13
         compiled from "/home/kdr00/kdr.kiev.ua/www/templates/responsive/tpl/review.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10240986585a3246e35b90b9-99514694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '353307a33fa9ab2bb65bdf77a77520a445a9137e' => 
    array (
      0 => '/home/kdr00/kdr.kiev.ua/www/templates/responsive/tpl/review.tpl',
      1 => 1628064107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10240986585a3246e35b90b9-99514694',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a3246e36460c8_00070587',
  'variables' => 
  array (
    'map' => 0,
    'content' => 0,
    'error' => 0,
    'submit' => 0,
    'reviews' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3246e36460c8_00070587')) {function content_5a3246e36460c8_00070587($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/kdr00/kdr.kiev.ua/www/system/libraries/smarty/plugins/modifier.date_format.php';
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

            <h1><?php echo $_smarty_tpl->tpl_vars['content']->value['name'];?>
</h1>

            <div class="reviews">
                <?php if ($_smarty_tpl->tpl_vars['error']->value){?><p class="red"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p><hr /><?php }?>
                <a class="revie-button" onclick="$('#review-form').toggle()">Оставить отзыв</a>

                <form enctype="multipart/form-data" class="forma" method="POST" name="forma" id="review-form"<?php if ($_smarty_tpl->tpl_vars['error']->value){?> style="display: block"<?php }?>>
                    <h2><span>Отправить отзыв</span></h2>
                    <p><label>Имя:*</label><input class="text" type="text" name="name" required=""></p>
                    <p><label>Организация:*</label><input class="text" type="text" name="org" required=""></p>
                    <p><label>Ваш e-mail:*</label><input class="text" type="text" name="email" required=""></p>
                    <p class="ph">
                        <label>Фотография:</label>
                        <input type="text" id="filename" value="файл не выбран" disabled="disabled" />
                        <input type="file" id="addf" onchange="ChangeFile()" name="f">
                        <a id="addfile" onclick="document.getElementById('addf').click();">Выбрать файл</a>
                    </p>
                    <p class="rt">Оценить нашу работу: 
                        <span class="rate">
                            <input name="rating" type="checkbox" checked="checked" value="1" id="rate1" onclick="Rate(1)" /><label for="rate1"></label>
                            <input name="rating" type="checkbox" value="2" id="rate2" onclick="Rate(2)" /><label for="rate2"></label>
                            <input name="rating" type="checkbox" value="3" id="rate3" onclick="Rate(3)" /><label for="rate3"></label>
                            <input name="rating" type="checkbox" value="4" id="rate4" onclick="Rate(4)" /><label for="rate4"></label>
                            <input name="rating" type="checkbox" value="5" id="rate5" onclick="Rate(5)" /><label for="rate5"></label>
                        </span>
                    </p>
                    <p>Ваш отзыв:</p>
                    <p><textarea class="text" name="aboutme" cols="26" rows="5" required=""></textarea></p>
                    <textarea class="hidden" name="text"></textarea>
                    <p class="last"><input type="submit" name="go" value="Отправить">
                    </p>
                </form>

                <?php if ($_smarty_tpl->tpl_vars['submit']->value){?><p class="red">Спасибо за Ваш отзыв!</p><hr /><?php }?>

                <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
                    <div class="item">
                        <?php if ($_smarty_tpl->tpl_vars['r']->value['type']){?><div class="pic"><img src="/files/modules/review/<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
.<?php echo $_smarty_tpl->tpl_vars['r']->value['type'];?>
" alt="" /></div><?php }?>
                        <div class="text">
                            <div class="row"><span>ФИО:</span> <?php echo $_smarty_tpl->tpl_vars['r']->value['name'];?>
</div>
                            <?php if ($_smarty_tpl->tpl_vars['r']->value['org']){?><div class="row"><span>Организация:</span> <?php echo $_smarty_tpl->tpl_vars['r']->value['org'];?>
</div><?php }?>
                            <div class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['r']->value['date'],$_smarty_tpl->getConfigVariable('dateformat'));?>
</div>
                            <p><?php echo $_smarty_tpl->tpl_vars['r']->value['text'];?>
</p>
                        </div>
                        <div class="fc"></div>
                    </div>
                    <hr />
                <?php } ?>


                
                    <div id="disqus_thread"></div>
                    <script type="text/javascript">
                        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                        var disqus_shortname = 'kievdatarecovery'; // required: replace example with your forum shortname

                        /* * * DON'T EDIT BELOW THIS LINE * * */
                        (function () {
                            var dsq = document.createElement('script');
                            dsq.type = 'text/javascript';
                            dsq.async = true;
                            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                        })();
                    </script>
                    <script type="text/javascript">
                        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                        var disqus_shortname = 'kievdatarecovery'; // required: replace example with your forum shortname

                        /* * * DON'T EDIT BELOW THIS LINE * * */
                        (function () {
                            var s = document.createElement('script');
                            s.async = true;
                            s.type = 'text/javascript';
                            s.src = '//' + disqus_shortname + '.disqus.com/count.js';
                            (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
                        }());
                    </script>
                

            </div>
            <!-- Put this div tag to the place, where the Comments block will be -->
        </div>
    </section>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>