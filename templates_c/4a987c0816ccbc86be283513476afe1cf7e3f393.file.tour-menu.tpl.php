<?php /* Smarty version Smarty-3.1.8, created on 2013-06-16 20:30:24
         compiled from "01_tpl/internal/tour-menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5909452824f8186cd355947-13414858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a987c0816ccbc86be283513476afe1cf7e3f393' => 
    array (
      0 => '01_tpl/internal/tour-menu.tpl',
      1 => 1371131304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5909452824f8186cd355947-13414858',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f8186cd3e5613_63004313',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f8186cd3e5613_63004313')) {function content_4f8186cd3e5613_63004313($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 | Touren</h3>
            <table cellpadding="0" cellspacing="0" id="menu-touren">
                <tr>
                    <td id="tourmenu-uprow" colspan="2">AKTIONSÜBERSICHT</td>
                </tr>
                <tr>
                    <td valign="top" id="column-add"><a class="link-tourmenu" href="add-tour.php">eine Aktivität hinzufügen...</a></td>
                    <td valign="top" id="column-edit"><a class="link-tourmenu" href="tours.php">Aktivitäten anzeigen und bei Bedarf bearbeiten...</a></td>
                </tr>
            </table>
            <br /><br /><br /><br />
                    
<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>