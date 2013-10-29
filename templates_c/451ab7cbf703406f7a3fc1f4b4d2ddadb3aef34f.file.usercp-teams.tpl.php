<?php /* Smarty version Smarty-3.1.8, created on 2013-10-29 09:29:17
         compiled from "01_tpl/internal/usercp-teams.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20144384751ab66f9b1d6a4-42688837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '451ab7cbf703406f7a3fc1f4b4d2ddadb3aef34f' => 
    array (
      0 => '01_tpl/internal/usercp-teams.tpl',
      1 => 1383038613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20144384751ab66f9b1d6a4-42688837',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ab66f9b75f57_98102415',
  'variables' => 
  array (
    'teamID' => 0,
    'teamLead' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ab66f9b75f57_98102415')) {function content_51ab66f9b75f57_98102415($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!-- Content -->
<ul>
<?php if ($_smarty_tpl->tpl_vars['teamID']->value==0){?>
    <li><a href="usercp-team-list.php">Teams durchstöbern</a></li>
    <li><a href="usercp-team-new.php">Eigenes Team erstellen</a></li>
<?php }else{ ?>
 	<li><a href="team.php?id=<?php echo $_smarty_tpl->tpl_vars['teamID']->value;?>
">Öffentliche Teamseite</a></li>
    <li><a href="usercp-team-view.php?id=<?php echo $_smarty_tpl->tpl_vars['teamID']->value;?>
">Allgemeine Teamseite</a></li>
    <?php if ($_smarty_tpl->tpl_vars['teamLead']->value==1){?>
    	<li><a href="usercp-team-settings.php">Interne Teamseite</a></li>
    <?php }elseif($_smarty_tpl->tpl_vars['teamLead']->value==2){?>
    	<li><a href="usercp-team-settings.php">Adminpanel</a></li>
    <?php }?>
    <li><a href="usercp-team-list.php">Teams durchstöbern</a></li>
<?php }?>
</ul>
        
<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>