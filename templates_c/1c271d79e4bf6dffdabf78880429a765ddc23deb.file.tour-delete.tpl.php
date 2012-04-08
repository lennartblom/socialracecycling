<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 11:01:48
         compiled from "01_tpl/internal/tour-delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8174063724f703fdba1c169-34843239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c271d79e4bf6dffdabf78880429a765ddc23deb' => 
    array (
      0 => '01_tpl/internal/tour-delete.tpl',
      1 => 1332759704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8174063724f703fdba1c169-34843239',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f703fdbaecac8_18849029',
  'variables' => 
  array (
    'error' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f703fdbaecac8_18849029')) {function content_4f703fdbaecac8_18849029($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h3>löschen | Touren</h3>

						
                        <?php if (isset($_smarty_tpl->tpl_vars['error']->value)||isset($_smarty_tpl->tpl_vars['success']->value)){?>
                        	<?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
                        	<div style="margin-left:auto;margin-right:auto;margin-bottom:20px;padding:8px;" id="errorbox-red">
                        		<p style="font-family:arial;font-size:13px;color:#ff0000;font-weight:bold;margin-top:0px;margin-bottom:5px;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
                            	<p style="font-family:arial;font-size:14px;color:red;font-weight:bold;"><a href="tours.php">Hier</a> geht es wieder zurück zur der Tourenübersicht.</p>
                        </div>
                        	<?php }?>
                            <?php if (isset($_smarty_tpl->tpl_vars['success']->value)){?>
                            <div id="errorbox-green" style="margin-top:10px;margin-left:50px;">
                                <p style="font-family:arial;font-size:14px;color:#00690e;font-weight:bold;"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</p>
                                <p style="font-family:arial;font-size:14px;color:#00690e;font-weight:bold;"><a href="tours.php">Hier</a> geht es wieder zurück zur der Tourenübersicht.</p>
                            </div>
                            <?php }?>
                       <?php }?>
						
						
						
					
						
				
                    
<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>