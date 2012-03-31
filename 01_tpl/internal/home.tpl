{include file="01_tpl/header.tpl"}

 <form action="".$_SERVER['PHP_SELF']."" method="POST" name="edit_charts">
		<input type="hidden" name="week_change" value="{$week_change}">
		<input type="hidden" name="month_change" value="{$month_change}">
		<input type="hidden" name="year_change" value="{$year_change}">
		
			<h3>Willkommen {$name} | Trainings-&Uuml;bersicht</h3>
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

									
		
						 <p style="font-size:12px;" class="text-content">Die gesamt Kilometer dieser Woche: <span style="font-weight:bold;color:green;">{$charts_weekkilometer} km</span></p>
                    	</td>
                		<td style="text-align:center;">
						<input type="submit" value="&larr; Monat zurück" name="plot_change" />
                        <input type="submit" value="aktueller Monat &darr;" name="plot_change"  />
                        <input type="submit" value="Monat vor &rarr;" name="plot_change" />
                        <div id="chart2" style="height:200px; width:530px;"></div>
                            <div class="code prettyprint">
                            <pre class="code prettyprint brush: js"></pre>
                        </div>
		
									
		
						 <p style="font-size:12px;" class="text-content">Die gesamt Kilometer dieses Monats: <span style="font-weight:bold;color:green;">{$charts_monthkilometer} km</span></p>
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
		
		

		<p style="font-size:14px;" class="text-content">Die gesamt Kilometer dieses Jahres: <span style="font-weight:bold;color:green;">{$charts_yearkilometer} km</span></p>
        
{include file="01_tpl/footer.tpl"}
