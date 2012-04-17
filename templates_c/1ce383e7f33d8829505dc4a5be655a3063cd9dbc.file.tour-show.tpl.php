<?php /* Smarty version Smarty-3.1.8, created on 2012-04-08 12:51:15
         compiled from "01_tpl/internal/tour-show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17734786854f8188cbac17b2-40938969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ce383e7f33d8829505dc4a5be655a3063cd9dbc' => 
    array (
      0 => '01_tpl/internal/tour-show.tpl',
      1 => 1333889471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17734786854f8188cbac17b2-40938969',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f8188cbb8bfe8_77212425',
  'variables' => 
  array (
    'error' => 0,
    'datum' => 0,
    'typ' => 0,
    'distanz' => 0,
    'dauer' => 0,
    'durchschnitt' => 0,
    'name' => 0,
    'lastname' => 0,
    'trittfrequenz' => 0,
    'hoehenmeter' => 0,
    'herzfrequenz' => 0,
    'info' => 0,
    'calendar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f8188cbb8bfe8_77212425')) {function content_4f8188cbb8bfe8_77212425($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

									
									
                                    
                                    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
                                    <h3>anzeigen | Tour</h3>
                                    <div style="margin-left:auto;margin-right:auto;margin-bottom:20px;padding:8px;" id="errorbox-red">
											<p style="font-family:arial;font-size:13px;color:#ff0000;font-weight:bold;margin-top:0px;margin-bottom:5px;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
                                            <p style="font-family:arial;font-size:14px;color:red;font-weight:bold;"><a href="tours.php">Hier</a> geht es wieder zurück zur der Tourenübersicht.</p>
									</div>
                                    <?php }else{ ?>
                                    <h3>Aktivität von Lennart Blom am <?php echo $_smarty_tpl->tpl_vars['datum']->value;?>
</h3>
                                            
                                            
                                    <table style="margin:auto;width:870px;min-height:500px;background-position:center center;background-image:url(images/activity-<?php echo $_smarty_tpl->tpl_vars['typ']->value;?>
-bg.png);background-repeat:no-repeat;">
                                    	<tr>
                                        	<td colspan="3" style="font-family:Arial;font-weight:bold;font-size:17px;color:#7e7e7e;">
                                            	Distanz
                                            </td>
                                            <td style="font-family:Arial;font-weight:bold;font-size:17px;color:#7e7e7e;">
                                            	Zeit
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td colspan="3" style="color:#272727;font-family:Arial;font-weight:bold;font-size:77px;">
                                            	<?php echo $_smarty_tpl->tpl_vars['distanz']->value;?>
 km
                                            </td>
                                            <td style="color:#272727;font-family:Arial;font-weight:bold;font-size:77px;">
                                            	<?php echo $_smarty_tpl->tpl_vars['dauer']->value;?>

                                            </td>
                                        </tr>
                                        <tr>
                                        	<td colspan="3" style="font-family:Arial;font-weight:bold;font-size:17px;color:#7e7e7e;">
                                            	&Oslash; Geschwindigkeit
                                            </td>
                                            <td style="font-family:Arial;font-weight:bold;font-size:17px;color:#7e7e7e;">
                                            	Datum
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td colspan="3" style="color:#272727;font-family:Arial;font-weight:bold;font-size:77px;">
                                            	<?php echo $_smarty_tpl->tpl_vars['durchschnitt']->value;?>
 km/h
                                            </td>
                                            <td style="color:#272727;font-family:Arial;font-weight:bold;font-size:77px;">
                                            	<?php echo $_smarty_tpl->tpl_vars['datum']->value;?>

                                            </td>
                                        </tr>
                                        <tr>
                                                <td style="color:#7e7e7e;font-family:Arial;font-weight:bold;font-size:11px;">
                                                    &Oslash; Trittfrequenz
                                                </td>
                                                <td style="color:#7e7e7e;font-family:Arial;font-weight:bold;font-size:11px;">
                                                    Höhenmeter
                                                </td>
                                                <td style="color:#7e7e7e;font-family:Arial;font-weight:bold;font-size:11px;">
                                                    &Oslash; Herzfrequenz
                                                </td>
                                                <td rowspan="2">
                                            		<h3 style="margin-left:0px;">Von <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
</h3>
                                                    <p style="font-family:Arial;font-weight:bold;font-size:14px;color:#272727;">Aktivitätstyp: <?php echo $_smarty_tpl->tpl_vars['typ']->value;?>
</p>
                                            	</td>
                                        </tr>
                                        <tr>
                                                <td style="color:#272727;font-family:Arial;font-weight:bold;font-size:37px;">
                                                    <?php echo $_smarty_tpl->tpl_vars['trittfrequenz']->value;?>
 rpm
                                                </td>
                                                <td  style="color:#272727;font-family:Arial;font-weight:bold;font-size:37px;">
                                                    <?php echo $_smarty_tpl->tpl_vars['hoehenmeter']->value;?>
 m
                                                </td>
                                                <td style="color:#272727;font-family:Arial;font-weight:bold;font-size:37px;">
                                                    <?php echo $_smarty_tpl->tpl_vars['herzfrequenz']->value;?>
 bpm
                                                </td>
                                                
                                        </tr>
                                        <tr>
                                        	<td colspan="3" style="font-family:Arial;font-weight:bold;font-size:17px;color:#7e7e7e;">
                                            	Zusätzliche Informationen
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                        	<td colspan="3" style="font-family:Arial;font-weight:bold;font-size:14px;color:#272727;">
                                            	<?php echo $_smarty_tpl->tpl_vars['info']->value;?>

                                            </td>
                                        </tr>
                                        <tr>
                                        	<td colspan="4">
                                            
                                            <br /><br />
                                             <?php if ($_smarty_tpl->tpl_vars['calendar']->value=='true'){?>
                                    			<p class="text-content" style="text-align:center;">
                                                	<a href="calendar.php">Hier</a> kommst du wieder zurück zum Kalendar.
                                                </p>
                                             <?php }else{ ?>
                                    			<p class="text-content" style="text-align:center;">
                                                	<a href="tours.php">Hier</a> kommst du wieder zurück zur Tourenübersicht.
                                                </p>
                                    		<?php }?>
                                            </td>
                                        </tr>
                                    </table>
                                    
                                   <?php }?>
                                    
									
                                    
                                    
					
					
                    
<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>