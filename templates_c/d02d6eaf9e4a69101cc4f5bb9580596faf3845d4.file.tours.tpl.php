<?php /* Smarty version Smarty-3.1.8, created on 2012-03-24 11:35:07
         compiled from "01_tpl/internal/tours.tpl" */ ?>
<?php /*%%SmartyHeaderCode:824379934f6db16bcb87b5-05832201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd02d6eaf9e4a69101cc4f5bb9580596faf3845d4' => 
    array (
      0 => '01_tpl/internal/tours.tpl',
      1 => 1332588835,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '824379934f6db16bcb87b5-05832201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f6db16bd1e2e9_02654496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f6db16bd1e2e9_02654496')) {function content_4f6db16bd1e2e9_02654496($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 | Touren</h3>
            <table cellpadding="0" cellspacing="0" id="menu-touren">
                <tr>
                    <td id="tourmenu-uprow" colspan="2">AKTIONSÜBERSICHT</td>
                </tr>
                <tr>
                    <td valign="top" id="column-add"><a class="link-tourmenu" href="add-tour.php">eine Tour hinzufügen...</a></td>
                    <td valign="top" id="column-edit"><a class="link-tourmenu" href="tours.php">sämtliche Touren anzeigen und bei Bedarf bearbeiten...</a></td>
                </tr>
            </table>
            <table style="margin-top:0px;margin-bottom:-40px;margin-left:160px;">
                    <tr>
                        <td><p class="text-tourmenu">Dieser Bereich ist der wichtigste des gesamten Projektes. Hier bist du in der Lage, ganz einfach deine gesammten Touren hinzuzufügen und bei Bedarf ohne Probleme zu löschen oder zu bearbeiten. </p></td>
                        <td><p class="text-tourmenu">Wenn du hier über deinen Namen die Maus bewegst erkennst du die Übersicht deines Profils. Mit Hilfe von bestimmten Rechnungen werden die gesamt Kilometer zusammengetragen, deine letzte Tour herraus gefiltert und die Anzahl der Kilometer dieser Woche addiert.</p></td>
                    </tr>
            </table>
                    
<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>