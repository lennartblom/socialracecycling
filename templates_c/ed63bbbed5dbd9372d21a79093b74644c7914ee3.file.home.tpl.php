<?php /* Smarty version Smarty-3.1.8, created on 2013-06-13 17:41:47
         compiled from "01_tpl\internal\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2566551b9e83b24edc6-17532276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed63bbbed5dbd9372d21a79093b74644c7914ee3' => 
    array (
      0 => '01_tpl\\internal\\home.tpl',
      1 => 1371137197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2566551b9e83b24edc6-17532276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'week_change' => 0,
    'month_change' => 0,
    'year_change' => 0,
    'name' => 0,
    'charts_weekkilometer' => 0,
    'charts_monthkilometer' => 0,
    'charts_yearkilometer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51b9e83b34c562_47114205',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b9e83b34c562_47114205')) {function content_51b9e83b34c562_47114205($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("01_tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


 <form action="".$_SERVER['PHP_SELF']."" method="POST" name="edit_charts">
		<input type="hidden" name="week_change" value="<?php echo $_smarty_tpl->tpl_vars['week_change']->value;?>
">
		<input type="hidden" name="month_change" value="<?php echo $_smarty_tpl->tpl_vars['month_change']->value;?>
">
		<input type="hidden" name="year_change" value="<?php echo $_smarty_tpl->tpl_vars['year_change']->value;?>
">
		
			<h3>Willkommen <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 | Deine Trainings&uuml;bersicht</h3>
            <br />
				<table style="margin-left:auto;margin-right:auto;">
					<tr>
                		<td style="text-align:center;">
						<input type="submit" value="&larr; Woche zurück" name="plot_change"  />
                        <input type="submit" value="aktuelle Woche &darr;" name="plot_change"  />
                        <input type="submit" value="Woche vor &rarr;" name="plot_change"  />
                        <div id="chart1" style="height:200px; width:300px;margin-left:15px;"></div>
                            <div class="code prettyprint">
                            <pre class="code prettyprint brush: js"></pre>
                        </div>

									
		
						 <p style="font-size:12px;" class="text-content">Die gesamt Kilometer dieser Woche: <span style="font-weight:bold;color:green;"><?php echo $_smarty_tpl->tpl_vars['charts_weekkilometer']->value;?>
 km</span></p>
                    	</td>
                		<td style="text-align:center;">
						<input type="submit" value="&larr; Monat zurück" name="plot_change" />
                        <input type="submit" value="aktueller Monat &darr;" name="plot_change"  />
                        <input type="submit" value="Monat vor &rarr;" name="plot_change" />
                        <div id="chart2" style="height:200px; width:530px;"></div>
                            <div class="code prettyprint">
                            <pre class="code prettyprint brush: js"></pre>
                        </div>
		
									
		
						 <p style="font-size:12px;" class="text-content">Die gesamt Kilometer dieses Monats: <span style="font-weight:bold;color:green;"><?php echo $_smarty_tpl->tpl_vars['charts_monthkilometer']->value;?>
 km</span></p>
                    	</td>
                	</tr>
                	<tr>
                		<td style="text-align:center;" colspan="2">   
						<input type="submit" value="&larr; Jahr zurück" name="plot_change"  />
                        <input type="submit" value="aktuelles Jahr &darr;" name="plot_change"  />
                        <input type="submit" value="Jahr vor &rarr;" name="plot_change"  />
                        <div id="chart3" style="margin-left:auto;margin-right:auto;height:200px; width:850px;"></div>
                            <div class="code prettyprint">
                            <pre class="code prettyprint brush: js"></pre>
                        </div>
                    	</td>
                	</tr>
          		</table>
		
		

		<p style="font-size:14px;" class="text-content">Die gesamt Kilometer dieses Jahres: <span style="font-weight:bold;color:green;"><?php echo $_smarty_tpl->tpl_vars['charts_yearkilometer']->value;?>
 km</span></p>
        
<?php echo $_smarty_tpl->getSubTemplate ("01_tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>