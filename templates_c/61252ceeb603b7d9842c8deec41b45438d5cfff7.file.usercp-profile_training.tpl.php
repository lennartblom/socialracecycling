<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 21:10:45
         compiled from "01_tpl/internal/usercp-profile_training.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6975999544f70c42d395e74-42502194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61252ceeb603b7d9842c8deec41b45438d5cfff7' => 
    array (
      0 => '01_tpl/internal/usercp-profile_training.tpl',
      1 => 1332796242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6975999544f70c42d395e74-42502194',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f70c42d3ee786_88505750',
  'variables' => 
  array (
    'error' => 0,
    'id' => 0,
    'week_change' => 0,
    'month_change' => 0,
    'year_change' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f70c42d3ee786_88505750')) {function content_4f70c42d3ee786_88505750($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
<div style="margin-left:auto;margin-right:auto;margin-bottom:20px;padding:8px;" id="errorbox-red">
        <p style="font-family:arial;font-size:13px;color:#ff0000;font-weight:bold;margin-top:0px;margin-bottom:5px;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
</div>
<?php }else{ ?>

<form action="usercp-profile_training.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="POST" name="edit_charts">
		<input type="hidden" name="week_change" value="<?php echo $_smarty_tpl->tpl_vars['week_change']->value;?>
" />
		<input type="hidden" name="month_change" value="<?php echo $_smarty_tpl->tpl_vars['month_change']->value;?>
" />
		<input type="hidden" name="year_change" value="<?php echo $_smarty_tpl->tpl_vars['year_change']->value;?>
" />


		<input type="hidden" name="member-choice" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />	
        
    <p class="text-content"><a href="usercp-mitgliederliste.php">Hier</a> gehts zurück zur MItgliederübersicht.</p>
    <a name="oben"></a>	
    <p align="center"><a href="#wochenansicht">Wochen&uuml;bersicht</a> - <a href="#monatsansicht">Monats&uuml;bersicht</a> - <a href="#jahresansicht">Jahres&uuml;bersicht</a></p>
    
    
    <a name="wochenansicht"></a>			
    
    <div id="chart1" style="margin-bottom:90px;margin-left:25px;height:350px; width:580px;"></div>
    <div class="code prettyprint">
    <pre class="code prettyprint brush: js"></pre>
    <p align="center"><a href="#oben">Wieder nach oben &uarr;</a></p>
    </div>
    
    <p style="text-align:center;">
        <input type="submit" value="&larr; Woche zurück" name="plot_change"  />
        <input type="submit" value="aktuelle Woche &darr;" name="plot_change"  />
        <input type="submit" value="Woche vor &rarr;" name="plot_change"  />
    </p>
    
    <a name="monatsansicht"></a>	
    <div id="chart2" style="margin-bottom:90px;margin-left:25px;height:350px; width:580px;"></div>
    <div class="code prettyprint">
    <pre class="code prettyprint brush: js"></pre>
    <p align="center"><a href="#oben">Wieder nach oben &uarr;</a></p>
    </div>
    
    <p style="text-align:center;">
        <input type="submit" value="&larr; Monat zurück" name="plot_change" />
        <input type="submit" value="aktueller Monat &darr;" name="plot_change"  />
        <input type="submit" value="Monat vor &rarr;" name="plot_change" />
    </p>
    
    
    <a name="jahresansicht"></a>	
    <div id="chart3" style="margin-bottom:90px;margin-left:25px;height:350px; width:580px;"></div>
    <div class="code prettyprint">
    <pre class="code prettyprint brush: js"></pre>
    <p align="center"><a href="#oben">Wieder nach oben &uarr;</a></p>
    </div>
    
    <p style="text-align:center;">
        <input type="submit" value="&larr; Jahr zurück" name="plot_change"  />
        <input type="submit" value="aktuelles Jahr &darr;" name="plot_change"  />
        <input type="submit" value="Jahr vor &rarr;" name="plot_change"  />
    </p>	



</form>


<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>