<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 21:00:50
         compiled from "01_tpl/internal/charts-user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13595622764f70c42d3f57b5-53309994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40764051c9d75346cda0f1d3f56db0cf7cee9dc8' => 
    array (
      0 => '01_tpl/internal/charts-user.tpl',
      1 => 1332795649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13595622764f70c42d3f57b5-53309994',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f70c42d48f3c3_79571578',
  'variables' => 
  array (
    'monday_1' => 0,
    'tuesday_1' => 0,
    'wednesday_1' => 0,
    'thursday_1' => 0,
    'friday_1' => 0,
    'saturday_1' => 0,
    'sunday_1' => 0,
    'monday_2' => 0,
    'tuesday_2' => 0,
    'wednesday_2' => 0,
    'thursday_2' => 0,
    'friday_2' => 0,
    'saturday_2' => 0,
    'sunday_2' => 0,
    'current_week' => 0,
    'vorname' => 0,
    'nachname' => 0,
    'monthkilometer_1' => 0,
    'dayelement_1' => 0,
    'monthkilometer_2' => 0,
    'dayelement_2' => 0,
    'current_month' => 0,
    'yearkilometer_1' => 0,
    'monthelement_1' => 0,
    'yearkilometer_2' => 0,
    'monthelement_2' => 0,
    'current_year' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f70c42d48f3c3_79571578')) {function content_4f70c42d48f3c3_79571578($_smarty_tpl) {?> <link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="jqPlot/jquery.jqplot.min.css"/>
<script type="text/javascript" src="jqPlot/plugins/jqplot.highlighter.min.js"></script>
<script type="text/javascript" src="jqPlot/plugins/jqplot.dateAxisRenderer.min.js"></script>
<script type="text/javascript" src="jqPlot/plugins/jqplot.canvasTextRenderer.min.js"></script>
<script type="text/javascript" src="jqPlot/plugins/jqplot.canvasAxisTickRenderer.min.js"></script>
<script type="text/javascript" src="jqPlot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
<script type="text/javascript" src="jqPlot/plugins/jqplot.barRenderer.min.js"></script>

<script class="code" type="text/javascript">
$(document).ready(function(){
      var line1 =  [<?php echo $_smarty_tpl->tpl_vars['monday_1']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['tuesday_1']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['wednesday_1']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['thursday_1']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['friday_1']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['saturday_1']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['sunday_1']->value;?>
];
      var line2 =  [<?php echo $_smarty_tpl->tpl_vars['monday_2']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['tuesday_2']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['wednesday_2']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['thursday_2']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['friday_2']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['saturday_2']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['sunday_2']->value;?>
];
    // Can specify a custom tick Array.
    // Ticks should match up one for each y value (category) in the series.
    var ticks = ['Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag', 'Sonntag'];

		plot1 = $.jqplot('chart1', [line1, line2], {
		title: 'Wochenübersicht(<?php echo $_smarty_tpl->tpl_vars['current_week']->value;?>
)',
		seriesColors: [ "#ff1e00", "#135089"],  
        // The "seriesDefaults" option is an options object that will
        // be applied to all series in the chart.
        seriesDefaults:{
            renderer:$.jqplot.BarRenderer,
            rendererOptions: {fillToZero: true}
        },
        // Custom labels for the series are specified with the "label"
        // option on the series option.  Here a series option object
        // is specified for each series.
        series:[
            {label:'Deine Trainingsdaten'},
            {label:'Trainingsdaten von <?php echo $_smarty_tpl->tpl_vars['vorname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['nachname']->value;?>
'},
        ],
        // Show the legend and put it outside the grid, but inside the
        // plot container, shrinking the grid to accomodate the legend.
        // A value of "outside" would not shrink the grid and allow
        // the legend to overflow the container.
        legend: {
            show: true,
            placement: 'insideGrid'
        },
        axes: {
            // Use a category axis on the x axis and use our custom ticks.
            xaxis: {
                renderer: $.jqplot.CategoryAxisRenderer,
                ticks: ticks
            },
            // Pad the y axis just a little so bars can get close to, but
            // not touch, the grid boundaries.  1.2 is the default padding.
            yaxis: {
                pad: 1.0,
                tickOptions: {formatString: '%dkm'}
            }
        }
    });
});
</script>

<script class="code" type="text/javascript">
$(document).ready(function(){
   var line1=[	
  			
  			<?php  $_smarty_tpl->tpl_vars['dayelement_1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dayelement_1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['monthkilometer_1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dayelement_1']->key => $_smarty_tpl->tpl_vars['dayelement_1']->value){
$_smarty_tpl->tpl_vars['dayelement_1']->_loop = true;
?>
            	<?php echo $_smarty_tpl->tpl_vars['dayelement_1']->value;?>

        	<?php } ?>
			
  			];
  var line2=[	
  			
  			<?php  $_smarty_tpl->tpl_vars['dayelement_2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dayelement_2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['monthkilometer_2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dayelement_2']->key => $_smarty_tpl->tpl_vars['dayelement_2']->value){
$_smarty_tpl->tpl_vars['dayelement_2']->_loop = true;
?>
            	<?php echo $_smarty_tpl->tpl_vars['dayelement_2']->value;?>

        	<?php } ?>
			
  			];
  var plot2 = $.jqplot('chart2', [line1, line2], {
      title: 'Monatsübersicht vom <?php echo $_smarty_tpl->tpl_vars['current_month']->value;?>
', 
	  seriesColors: [ "#ff1e00", "#135089"],  
	  series:[
            {label:'Deine Trainingsdaten'},
            {label:'Trainingsdaten von <?php echo $_smarty_tpl->tpl_vars['vorname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['nachname']->value;?>
'},
],
		
        // Show the legend and put it outside the grid, but inside the
        // plot container, shrinking the grid to accomodate the legend.
        // A value of "outside" would not shrink the grid and allow
        // the legend to overflow the container.
		
        legend: {
            show: true,
            placement: 'insideGrid'
        },
	  axes:{
        xaxis:{
			
          renderer:$.jqplot.DateAxisRenderer,
          tickOptions:{
            formatString:'%b&nbsp;%#d'
          } 
        },
        yaxis:{
          tickOptions:{
            formatString:'%.2fkm'
            }
        }
      },
      highlighter: {
        show: true,
        sizeAdjust: 7.5
      },
      cursor: {
        show: false
      }
  });
});
</script>          
<script class="code" type="text/javascript">
$(document).ready(function(){  
	  var line1 =  [
  				
  				<?php  $_smarty_tpl->tpl_vars['monthelement_1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['monthelement_1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['yearkilometer_1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['monthelement_1']->key => $_smarty_tpl->tpl_vars['monthelement_1']->value){
$_smarty_tpl->tpl_vars['monthelement_1']->_loop = true;
?>
            		<?php echo $_smarty_tpl->tpl_vars['monthelement_1']->value;?>
,
        		<?php } ?>
				
			   ];
      var line2 =  [
  				
  				<?php  $_smarty_tpl->tpl_vars['monthelement_2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['monthelement_2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['yearkilometer_2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['monthelement_2']->key => $_smarty_tpl->tpl_vars['monthelement_2']->value){
$_smarty_tpl->tpl_vars['monthelement_2']->_loop = true;
?>
            		<?php echo $_smarty_tpl->tpl_vars['monthelement_2']->value;?>
,
        		<?php } ?>
				
			   ];
    // Can specify a custom tick Array.
    // Ticks should match up one for each y value (category) in the series.
    var ticks = ['Jan', 'Feb', 'März', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sept', 'Okt', 'Nov', 'Dez'];

		plot1 = $.jqplot('chart3', [line1, line2], {
		title: 'Jahresübersicht von <?php echo $_smarty_tpl->tpl_vars['current_year']->value;?>
',
		seriesColors: [ "#ff1e00", "#135089"],  
        // The "seriesDefaults" option is an options object that will
        // be applied to all series in the chart.
        seriesDefaults:{
            renderer:$.jqplot.BarRenderer,
             rendererOptions: {fillToZero: true}
        },
        // Custom labels for the series are specified with the "label"
        // option on the series option.  Here a series option object
        // is specified for each series.
        series:[
             {label:'Deine Trainingsdaten'},            
			{label:'Trainingsdaten von <?php echo $_smarty_tpl->tpl_vars['vorname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['nachname']->value;?>
'}, 
],
        // Show the legend and put it outside the grid, but inside the
        // plot container, shrinking the grid to accomodate the legend.
        // A value of "outside" would not shrink the grid and allow
        // the legend to overflow the container.
        legend: {
            show: true,
            placement: 'insideGrid'
        },
        axes: {
            // Use a category axis on the x axis and use our custom ticks.
            xaxis: {
                renderer: $.jqplot.CategoryAxisRenderer,
                ticks: ticks
            },
            // Pad the y axis just a little so bars can get close to, but
            // not touch, the grid boundaries.  1.2 is the default padding.
            yaxis: {
                pad: 1.0,
                 tickOptions: {formatString: '%dkm'} 
            }
        }
    });
});
</script>


<?php }} ?>