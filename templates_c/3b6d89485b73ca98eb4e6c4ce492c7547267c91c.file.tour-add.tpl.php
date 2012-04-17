<?php /* Smarty version Smarty-3.1.8, created on 2012-04-12 11:14:56
         compiled from "01_tpl/internal/tour-add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:347392594f81926e534f22-61879260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b6d89485b73ca98eb4e6c4ce492c7547267c91c' => 
    array (
      0 => '01_tpl/internal/tour-add.tpl',
      1 => 1334229295,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '347392594f81926e534f22-61879260',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f81926e7305d3_54260898',
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'tag' => 0,
    'heute_tag' => 0,
    'monat' => 0,
    'heute_monat' => 0,
    'jahr' => 0,
    'heute_jahr' => 0,
    'stunden' => 0,
    'minuten' => 0,
    'sekunden' => 0,
    'distanz' => 0,
    'infos' => 0,
    'herzfrequenz' => 0,
    'kadenz' => 0,
    'hoehenmeter' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f81926e7305d3_54260898')) {function content_4f81926e7305d3_54260898($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					    <h3>Aktivität hinzufügen</h3>
                        
                        <?php if (count($_smarty_tpl->tpl_vars['errors']->value)){?>
                        <img style="float:right;margin-right:100px;" src="images/fehler.jpg" alt="Fehler Benachrichtigung" width="200" height="200">	
                        <div style="margin-left:150px;margin-bottom:50px;" id="errorbox-red">
                            <span style="font-weight:bold;font-family:arial; font-size:15px;color:#5a5a5a;">Die Tour konnte nicht zu Ihrer Datenbank hinzugefügt werden!
                            <br />Folgende Werte werden für den Eintrag noch benötigt</span>
                            <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                            	<p style="margin-left:50px;margin-top:5px;margin-bottom:-10px;font-weight:bold;color:#F00;font-family:arial;font-size:12px;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p><br>
                            <?php } ?>
                    	</div>

						<?php }?>
					    <form method="post" action="add-tour.php">    
					        <table style="margin:auto;" id="inputarea">
					            <tr>
					                <td class="label-input-addtrack"><label>Datum:</label></td>
					                <td>                          
					                    <select style="width:90px;background-color:#f8fcff;" name="Date_Day">
                                        	
                                            <?php if (isset($_smarty_tpl->tpl_vars['tag']->value)&&$_smarty_tpl->tpl_vars['tag']->value!=''){?> 
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</option>
                                            <?php }else{ ?>
                                                		<option value="<?php echo $_smarty_tpl->tpl_vars['heute_tag']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['heute_tag']->value;?>
 (heute)</option>
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
					                   	<select style="width:90px;background-color:#f8fcff;" name="Date_Month">
                                        	<?php if (isset($_smarty_tpl->tpl_vars['monat']->value)&&$_smarty_tpl->tpl_vars['monat']->value!=''){?> 
                                                    	<option value="<?php echo $_smarty_tpl->tpl_vars['monat']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['monat']->value;?>
</option>
                                            <?php }else{ ?>
                                                		<option value="<?php echo $_smarty_tpl->tpl_vars['heute_monat']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['heute_monat']->value;?>
 (heute)</option>
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
					                    <select style="width:90px;background-color:#f8fcff;" name="Date_Year">
                                        	
                                            <?php if (isset($_smarty_tpl->tpl_vars['jahr']->value)&&$_smarty_tpl->tpl_vars['jahr']->value!=''){?> 
                                                    	<option value="<?php echo $_smarty_tpl->tpl_vars['jahr']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['jahr']->value;?>
</option>
                                            <?php }else{ ?>
                                                		<option value="<?php echo $_smarty_tpl->tpl_vars['heute_jahr']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['heute_jahr']->value;?>
 (heute)</option>
                                            <?php }?>	
					                      	<option value="2012">2012</option>
					                      	<option value="2011">2011</option>
					                      	<option value="2010">2010</option>
					                    </select>
					                </td>
					            </tr>
					            <tr>
					                <td class="label-input-addtrack"><label >Zeit:</label></td>
					                <td>
					                	<select style="width:90px;background-color:#f8fcff;" class="addtour-timeinput-hours" name="Time_Hours">
                                    			
                                                
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
                                        <select style="width:90px;background-color:#f8fcff;" class="addtour-timeinput-minutes" name="Time_Minutes"> 
                                        		
                                                
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
                                         <select style="width:90px;background-color:#f8fcff;" class="addtour-timeinput-minutes" name="Time_Seconds"> 
                                         	
                                            
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
					                <td class="additional-information">Stunden - Minuten - Sekunden</td>
					            </tr>
					            <tr>
					                <td class="label-input-addtrack"><label>gesamt Distanz:</label></td>
					                <td><input class="tour-edit-input" value="<?php echo $_smarty_tpl->tpl_vars['distanz']->value;?>
" name="distance" class="addtour-normalinput" /></td> 
					                <td class="additional-information">Kilometer</td>
					            </tr>
					            <tr>
					                <td valign="top" class="label-input-addtrack"><label>Weitere Angaben:</label></td>
					                <td colspan="4"><textarea class="tour-edit-input" style="height:100px;" name="moreinformation" rows="5" cols="37"><?php echo $_smarty_tpl->tpl_vars['infos']->value;?>
</textarea></td>
					            </tr>
                                <tr>
					                <td class="label-input-addtrack"><select name="weiteres feld"><option>Herzfrequenz</option></select></td>
					                <td><input class="tour-edit-input" name="herzfrequenz" value="<?php echo $_smarty_tpl->tpl_vars['herzfrequenz']->value;?>
" class="addtour-normalinput" /></td>
					                <td class="additional-information">bpm</td>
					            </tr>
					            <tr>
					                <td class="label-input-addtrack"><select name="weiteres feld"><option>Trittfrequenz</option></select></td>
					                <td><input class="tour-edit-input" name="cadence" value="<?php echo $_smarty_tpl->tpl_vars['kadenz']->value;?>
" class="addtour-normalinput" /></td>
					                <td class="additional-information">rpm</td>
					            </tr>
					            <tr>
					                <td class="label-input-addtrack"><select name="hoehenmeter"><option>Höhenmeter</option></select></td>
					                <td><input class="tour-edit-input" name="heights" value="<?php echo $_smarty_tpl->tpl_vars['hoehenmeter']->value;?>
" class="addtour-normalinput" /></td>
					                <td class="additional-information">Meter</td>
					            </tr>
                                <tr>
                                	<td class="label-input-addtrack">Aktivitätstyp:</td>
                                    <td>
                                     	<select style="width:280px;height:40px;background-color:#f8fcff;" name="activity_type">
                                        	<option style="padding:11px 33px;background-image:images/icon-radfahren.png;" value="radfahren">Radfahren</option>
                                            <option style="padding:11px 33px;background-image:images/icon-laufen.png;" value="laufen">Laufen</option>
                                        </select>
                                    </td>
                               </tr>
					        </table> 
					      <p style="margin-left:250px;font-weight:bold;color:#F00;font-family:arial;font-size:12px;">Einheiten bitte weglassen!<br />Diese werden automatisch von dem System eingestellt...</p>
					      <p style="margin-left:350px;"><input name="abschicken" type="submit" value="Tourdaten abschicken" /></p>         
					    </form>	
					
            <div class="clearing"></div>
            
<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>