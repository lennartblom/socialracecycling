<?php /* Smarty version Smarty-3.1.8, created on 2013-06-13 20:12:57
         compiled from "01_tpl/frontpage/attempt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8032936544f81a3b4beed91-66267727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c05f388dd6aebd3d70bef0477781c8bd1c525c6' => 
    array (
      0 => '01_tpl/frontpage/attempt.tpl',
      1 => 1371131304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8032936544f81a3b4beed91-66267727',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f81a3b4c49e61_47967446',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f81a3b4c49e61_47967446')) {function content_4f81a3b4c49e61_47967446($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


            <div id="errorbox-red" style="margin-top:50px;padding-bottom:20px;">
                <h4 style="color:#FF0000;font-weight:bold;">Du bist nicht eingeloggt!</h4>
                <p style="font-weight:bold;color:#5a5a5a;">Um diesen Bereich einzusehen zu k&ouml;nnen, musst du dich vorerst einloggen!</p><br />
                <p style="font-weight:bold;color:#5a5a5a;">Falls du noch nicht registriert bist, kannst du das auf <a href="registration-screen.php">dieser Seite</a> tun!</p>
                <p style="font-weight:bold;color:#5a5a5a;">Wenn du gerade versucht hast dich einzuloggen, versuche es einfach später noch einmal.</p>
            </div>
            
<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					
<?php }} ?>