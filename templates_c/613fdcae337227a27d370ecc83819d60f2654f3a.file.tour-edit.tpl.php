<?php /* Smarty version Smarty-3.1.8, created on 2013-05-26 19:49:19
         compiled from "01_tpl/internal/tour-edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100164115451a266c10322a6-46007420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '613fdcae337227a27d370ecc83819d60f2654f3a' => 
    array (
      0 => '01_tpl/internal/tour-edit.tpl',
      1 => 1369597750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100164115451a266c10322a6-46007420',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51a266c1273ca4_66341240',
  'variables' => 
  array (
    'error' => 0,
    'tag' => 0,
    'monat' => 0,
    'jahr' => 0,
    'distanz' => 0,
    'stunden' => 0,
    'minuten' => 0,
    'sekunden' => 0,
    'trittfrequenz' => 0,
    'herzfrequenz' => 0,
    'hoehenmeter' => 0,
    'info' => 0,
    'typ' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a266c1273ca4_66341240')) {function content_51a266c1273ca4_66341240($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

								
<h3>bearbeiten | Tour</h3>


<?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
    <div style="margin-left:auto;margin-right:auto;margin-bottom:20px;padding:8px;" id="errorbox-red">
            <p style="font-family:arial;font-size:13px;color:#ff0000;font-weight:bold;margin-top:0px;margin-bottom:5px;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
            <p style="font-family:arial;font-size:14px;color:red;font-weight:bold;"><a href="tours.php">Hier</a> geht es wieder zurück zur der Tourenübersicht.</p>
    </div>
<?php }else{ ?>

<form action="edit-tour.php" method="post" name="edit-tour">
<table style="margin:auto;">
    <tr>
        <td class="label">Datum:</td>
        <td>
       		<select style="width:90px; background-color:#f8fcff;"" name="Date_Day">                                 
                <?php if (isset($_smarty_tpl->tpl_vars['tag']->value)&&$_smarty_tpl->tpl_vars['tag']->value!=''){?> 
                    <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</option>
                <?php }else{ ?>
                            <option value="" selected>Tag</option>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=31) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                    <option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index']+1;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index']+1;?>
</option>
                <?php endfor; endif; ?>						                    
            </select>
            <select style="width:90px; background-color:#f8fcff;"" name="Date_Month">
                <?php if (isset($_smarty_tpl->tpl_vars['monat']->value)&&$_smarty_tpl->tpl_vars['monat']->value!=''){?> 
                            <option value="<?php echo $_smarty_tpl->tpl_vars['monat']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['monat']->value;?>
</option>
                <?php }else{ ?>
                            <option value="" selected>Monat</option>
                <?php }?>
                <option value="01">Januar</option>
                <option value="02">Februar</option>
                <option value="03">März</option>
                <option value="04">April</option>
                <option value="05">Mai</option>
                <option value="06">Juni</option>
                <option value="07">Juli</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12" >Dezember</option>
            </select>
            <select style="width:90px; background-color:#f8fcff;"" name="Date_Year">
                
                <?php if (isset($_smarty_tpl->tpl_vars['jahr']->value)&&$_smarty_tpl->tpl_vars['jahr']->value!=''){?> 
                            <option value="<?php echo $_smarty_tpl->tpl_vars['jahr']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['jahr']->value;?>
</option>
                <?php }else{ ?>
                            <option value="" selected>Jahr</option>
                <?php }?>	
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
            </select>
                                        </td>
    </tr>
    <tr>
        <td class="label">Distanz:</td>
        <td><input  class="tour-edit-input" name="distance" value="<?php echo $_smarty_tpl->tpl_vars['distanz']->value;?>
" type="text" maxlength="70"  /></td>
        <td class="label-tour-edit">Kilometer</td>
    </tr>
    <tr>
        <td class="label">Fahrzeit:</td>
        <td>
        <select style="width:90px; background-color:#f8fcff;"" class="addtour-timeinput-hours" name="Time_Hours">                  
                <?php if (isset($_smarty_tpl->tpl_vars['stunden']->value)&&$_smarty_tpl->tpl_vars['stunden']->value!=''){?> 
                        <option value="<?php echo $_smarty_tpl->tpl_vars['stunden']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['stunden']->value;?>
</option>
                <?php }else{ ?>
                        <option value="" selected>Stunden</option>	
                <?php }?>                                                  
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=12) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                     <option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
</option>
                <?php endfor; endif; ?>		
        </select>     
        <select style="width:90px; background-color:#f8fcff;"" class="addtour-timeinput-minutes" name="Time_Minutes"> 
                
                
                <?php if (isset($_smarty_tpl->tpl_vars['minuten']->value)&&$_smarty_tpl->tpl_vars['minuten']->value!=''){?> 
                        <option value="<?php echo $_smarty_tpl->tpl_vars['minuten']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['minuten']->value;?>
</option>
                <?php }else{ ?>
                        <option value="" selected>Minuten</option>
                <?php }?>	
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=60) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>{
                     <option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
</option>
                <?php endfor; endif; ?>	
        </select> 
         <select style="width:90px; background-color:#f8fcff;"" class="addtour-timeinput-minutes" name="Time_Seconds"> 
            
            
                <?php if (isset($_smarty_tpl->tpl_vars['sekunden']->value)&&$_smarty_tpl->tpl_vars['sekunden']->value!=''){?> 
                        <option value="<?php echo $_smarty_tpl->tpl_vars['sekunden']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['sekunden']->value;?>
</option>
                <?php }else{ ?>
                        <option value="" selected>Sekunden</option>
                <?php }?>	
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=60) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>{
                     <option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
</option>
                <?php endfor; endif; ?>	
        </select> 
        </td>
    </tr>
    <tr>
        <td class="label">Durchschnittliche Trittfrequenz:</td>
        <td><input class="tour-edit-input" name="average-cadence" value="<?php echo $_smarty_tpl->tpl_vars['trittfrequenz']->value;?>
" type="text" maxlength="70"  /></td>
        <td class="label-tour-edit">rpm</td>
    </tr>
    <tr>
        <td class="label">Durchschnittliche Herzfrequenz:</td>
        <td><input class="tour-edit-input" name="herzfrequenz" value="<?php echo $_smarty_tpl->tpl_vars['herzfrequenz']->value;?>
" type="text" maxlength="70"  /></td>
        <td class="label-tour-edit">bpm</td>
    </tr>
    <tr>
        <td class="label">Höhenunterschied:</td>
        <td><input  class="tour-edit-input" name="elevator-difference" value="<?php echo $_smarty_tpl->tpl_vars['hoehenmeter']->value;?>
" type="text" maxlength="70"  /></td>
        <td class="label-tour-edit">m</td>
    </tr>
    <tr>
        <td class="label">zusätzliche Tourinformationen:</td>
        <td><textarea name="other-information" style="margin-left:-1px;height:100px;" type="text" rows="10" cols="35" ><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</textarea></td>
    </tr>
    <tr>
        <td class="label-input-addtrack">Aktivitätstyp:</td>
        <td>
            <select style="width:280px;height:40px;background-color:#f8fcff;" name="activity_type">
            	<option style="padding:11px 33px;" value="<?php echo $_smarty_tpl->tpl_vars['typ']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['typ']->value;?>
</option>
                <option style="padding:11px 33px;background-image:images/icon-radfahren.png;" value="radfahren">Radfahren</option>
                <option style="padding:11px 33px;background-image:images/icon-laufen.png;" value="laufen">Laufen</option>
            </select>
        </td>
   </tr>
</table>
<br /><br />
<input style="margin-left:500px;" type="submit" name="submit" value="Tourdaten aktualisieren" />
<br /><br />
<p class="text-content" style="text-align:center;"><a href="tours.php">Hier</a> gelangen Sie wieder zurück zur Tourenübersicht.</p>

<input type="hidden" name="tourID" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />


</form>

<?php }?>
				
                
<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>