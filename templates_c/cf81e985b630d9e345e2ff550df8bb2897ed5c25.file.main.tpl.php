<?php /* Smarty version Smarty-3.1.8, created on 2012-03-12 18:58:53
         compiled from "tpl/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16592478514f5ddde56a97a9-71769195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf81e985b630d9e345e2ff550df8bb2897ed5c25' => 
    array (
      0 => 'tpl/main.tpl',
      1 => 1331578729,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16592478514f5ddde56a97a9-71769195',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f5ddde56f1ad2_89585501',
  'variables' => 
  array (
    'lastname' => 0,
    'charts_weekkilometer' => 0,
    'charts_monthkilometer' => 0,
    'charts_yearkilometer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5ddde56f1ad2_89585501')) {function content_4f5ddde56f1ad2_89585501($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("tpl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


 <form action="".$_SERVER['PHP_SELF']."" method="POST" name="edit_charts">
		<input type="hidden" name="week_change" value="".$_SESSION['week_change']."">
		<input type="hidden" name="month_change" value="".$_SESSION['month_change']."">
		<input type="hidden" name="year_change" value="".$_SESSION['year_change']."">
		
			<h3>Herzlich Willkommen Herr <?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
 | &Uuml;bersicht</h3><br>
				<table style="margin-left:auto;margin-right:auto;">
					<tr>
                		<td style="text-align:center;">
						<input type="submit" value="&larr; Woche zurück" name="plot_change"  /><input type="submit" value="aktuelle Woche &darr;" name="plot_change"  /><input type="submit" value="Woche vor &rarr;" name="plot_change"  />
                        <div id="chart1" style="height:200px; width:300px;margin-left:15px;"></div>
                            <div class="code prettyprint">
                            <pre class="code prettyprint brush: js"></pre>
                        </div>

									
		
						 <p style="font-size:12px;" class="text-content">Die gesamt Kilometer dieser Woche: <span style="font-weight:bold;color:green;"><?php echo $_smarty_tpl->tpl_vars['charts_weekkilometer']->value;?>
 km</span></p>
                    	</td>
                		<td style="text-align:center;">
						<input type="submit" value="&larr; Monat zurück" name="plot_change" /><input type="submit" value="aktueller Monat &darr;" name="plot_change"  /><input type="submit" value="Monat vor &rarr;" name="plot_change" />
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
						<input type="submit" value="&larr; Jahr zurück" name="plot_change"  /><input type="submit" value="aktuelles Jahr &darr;" name="plot_change"  /><input type="submit" value="Jahr vor &rarr;" name="plot_change"  />
                        <div id="chart3" style="margin-left:auto;margin-right:auto;height:200px; width:850px;"></div>
                            <div class="code prettyprint">
                            <pre class="code prettyprint brush: js"></pre>
                        </div>
                    	</td>
                	</tr>
          		</table>
		
		

		<p style="font-size:14px;" class="text-content">Die gesamt Kilometer dieses Jahres: <span style="font-weight:bold;color:green;"><?php echo $_smarty_tpl->tpl_vars['charts_yearkilometer']->value;?>
 km</span></p>
        
<?php echo $_smarty_tpl->getSubTemplate ("tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>