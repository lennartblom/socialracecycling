<?php /* Smarty version Smarty-3.1.8, created on 2012-03-12 21:21:17
         compiled from "tpl/attempt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4032567924f5e5c43aa9339-63763675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cb9cff296247f9cf6fbea1a296e9a1908f506fc' => 
    array (
      0 => 'tpl/attempt.tpl',
      1 => 1331587269,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4032567924f5e5c43aa9339-63763675',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f5e5c43b040a5_39082557',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5e5c43b040a5_39082557')) {function content_4f5e5c43b040a5_39082557($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("tpl/frontpage_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


            <div id="errorbox-red" style="margin-top:50px;padding-bottom:20px;">
                <h4 style="color:#FF0000;font-weight:bold;">Du musst dich einloggen!</h4>
                <p style="font-weight:bold;color:#5a5a5a;">Um diesen Bereich einzusehen zu k&ouml;nnen, musst du dich vorerst einloggen!</p><br />
                <p style="font-weight:bold;color:#5a5a5a;">Falls du noch nicht registriert bist, kannst du das auf <a href="registration-screen.php">dieser Seite</a> tuen!</p>
            </div>
            
<?php echo $_smarty_tpl->getSubTemplate ("tpl/frontpage_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					
<?php }} ?>