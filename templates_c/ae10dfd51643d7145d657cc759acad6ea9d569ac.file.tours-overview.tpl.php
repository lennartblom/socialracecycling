<?php /* Smarty version Smarty-3.1.8, created on 2012-03-31 16:06:17
         compiled from "01_tpl/internal/tours-overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14075435944f6f4edf2f5e69-20894706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae10dfd51643d7145d657cc759acad6ea9d569ac' => 
    array (
      0 => '01_tpl/internal/tours-overview.tpl',
      1 => 1333209974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14075435944f6f4edf2f5e69-20894706',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f6f4edf3727f0_98824666',
  'variables' => 
  array (
    'change_selection' => 0,
    'error' => 0,
    'touren' => 0,
    'touritem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f6f4edf3727f0_98824666')) {function content_4f6f4edf3727f0_98824666($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h3>Übersicht deiner Aktivitäten | anzeigen, bearbeiten oder löschen</h3>
				
				<form name="tour-menu" method="post" action="tours.php">
				
                    <input type="hidden" name="change_selection_var" value="<?php echo $_smarty_tpl->tpl_vars['change_selection']->value;?>
">
                    
                    <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
                    
                    <p style="text-align:center;">
                            <input type="submit" name="change_selection" value="&larr;" />
                            <input type="submit" name="change_selection" value="&rarr;" /> 
                    </p>
                    <table border="1" id="edittour-tabelle">
                        <tr>
                            <td class="edittour-showtour-headline">Auswahl</td>
                            <td class="edittour-showtour-headline">Datum</td>
                            <td class="edittour-showtour-headline">Typ</td>
                            <td class="edittour-showtour-headline">Distanz</td>
                            <td class="edittour-showtour-headline">Zeit</td>
                            <td class="edittour-showtour-headline">&Oslash; Geschwindigkeit</td>
                            <td class="edittour-showtour-headline">&Oslash; Trittfrequenz</td>
                            <td class="edittour-showtour-headline">&Oslash; Herzfrequenz</td>
                            <td class="edittour-showtour-headline">Höhenmeter</td>
                        </tr>
                            
                    <?php  $_smarty_tpl->tpl_vars['touritem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['touritem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['touren']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['touritem']->key => $_smarty_tpl->tpl_vars['touritem']->value){
$_smarty_tpl->tpl_vars['touritem']->_loop = true;
?>
                        <tr>
                            <?php echo $_smarty_tpl->tpl_vars['touritem']->value;?>

                        </tr>
                    <?php } ?>
                    </table>
						
                		<p style="text-align:center;">
                            <input type="submit" name="submit" value="Tourdaten anzeigen" />
                            <input type="submit" name="submit" value="Tourdaten bearbeiten" />
                            <input type="submit" name="submit" value="Tourdaten löschen" />
                        </p>
    
                </form>
                
<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>