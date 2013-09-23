<?php /* Smarty version Smarty-3.1.8, created on 2013-06-13 18:43:44
         compiled from "01_tpl/internal/usercp-teams.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20144384751ab66f9b1d6a4-42688837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '451ab7cbf703406f7a3fc1f4b4d2ddadb3aef34f' => 
    array (
      0 => '01_tpl/internal/usercp-teams.tpl',
      1 => 1371131305,
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
    'errors' => 0,
    'error' => 0,
    'team_name' => 0,
    'info' => 0,
    'website' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ab66f9b75f57_98102415')) {function content_51ab66f9b75f57_98102415($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h6>Teams</h6>

<h5>Erstelle dein eigenes Team</h5>


 
    <form action="" method="POST" enctype="multipart/form-data">

<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)){?>
    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
    	<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    <?php } ?>
<?php }?>

<table>
    <tr>
        <td class="profil-column">Teamname</td>
        <td><input name="team_name" class="profile-normalinput"  value="<?php echo $_smarty_tpl->tpl_vars['team_name']->value;?>
" /></td>
    </tr>
    <tr>
        <td class="profil-column">Teaminformation</td>
        <td><textarea name="team_information"  class="profile-normalinput"><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</textarea></td>
    </tr>
    <tr>
        <td class="profil-column">Teamwebsite</td>
        <td><input name="team_website" value="<?php echo $_smarty_tpl->tpl_vars['website']->value;?>
" class="profile-normalinput"  /></td>
    </tr>
    <tr>
        <td class="profil-column">Teamlogo</td>
        <td><input style="height:25px;padding-top:5px;" type="file" name="team_logo" value=""   /></td>
    </tr>
    
</table>
 <input name="create_team" value="Team erstellen" style="display:block;margin-left:auto;margin-right:auto;margin-top:50px;" type="submit" />

  
    
    
<hr />
<br /><br /><br /><br />
<h6>Teams</h6>

<h5>Du bist bereits Teammitglied vom <a href="team-dashboard.php"><em>Team Coffeeride</em></a>!</h5>


<p class="about-text-new" style="text-align:center;">Möchtest du ein paar Impressionen des Teams für die Teamseite erstellen?<br />
Hier kannst du ein Bild vom Training oder Veranstaltungen hochladen</p>
<table>
    <tr>
        <td class="profil-column">Teamimpression</td>
        <td><input style="height:25px;padding-top:5px;" type="file" name="team_image" value=""   /></td>
    </tr>
     <tr>
        <td class="profil-column">Titel oder Bildbeschreibung</td>
        <td><input name="image_title" class="profile-normalinput"  value="" /></td>
    </tr>
</table>


    <input name="create_team" value="Bild für die Teamseite abschicken" style="display:block;margin-left:auto;margin-right:auto;margin-top:50px;" type="submit" />



<hr />
<br /><br /><br /><br />





<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>