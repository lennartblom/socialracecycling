<?php /* Smarty version Smarty-3.1.8, created on 2012-03-12 19:03:54
         compiled from "tpl/charts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14719839844f5e4152de9a27-66115459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c04b37e22c861f5a7b05cac5bff1b6f7d4ad234' => 
    array (
      0 => 'tpl/charts.tpl',
      1 => 1331578940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14719839844f5e4152de9a27-66115459',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f5e4152e50033_11630385',
  'variables' => 
  array (
    'monday' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5e4152e50033_11630385')) {function content_4f5e4152e50033_11630385($_smarty_tpl) {?><link rel="stylesheet" type="text/css" href="jqPlot/jquery.jqplot.min.css"/>
    	<script type="text/javascript" src="jqPlot/plugins/jqplot.highlighter.min.js"></script>
        <script type="text/javascript" src="jqPlot/plugins/jqplot.dateAxisRenderer.min.js"></script>
		<script type="text/javascript" src="jqPlot/plugins/jqplot.canvasTextRenderer.min.js"></script>
        <script type="text/javascript" src="jqPlot/plugins/jqplot.canvasAxisTickRenderer.min.js"></script>
        <script type="text/javascript" src="jqPlot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
        <script type="text/javascript" src="jqPlot/plugins/jqplot.barRenderer.min.js"></script>  
  		<script class="code" type="text/javascript">
  
$(document).ready(function(){  
  var line1 =  [
  			   ['Montag'	, <?php echo $_smarty_tpl->tpl_vars['monday']->value;?>
	], 
  			   ['Dienstag'	, <<?php ?>?php echo $tuesday; ?<?php ?>>	], 
			   ['Mittwoch'	, <<?php ?>?php echo $wednesday; ?<?php ?>>	], 
			   ['Donnerstag', <<?php ?>?php echo $thursday; ?<?php ?>>	], 
			   ['Freitag'	, <<?php ?>?php echo $friday; ?<?php ?>>	], 
			   ['Samstag'	, <<?php ?>?php echo $saturday; ?<?php ?>>	], 
			   ['Sonntag'	, <<?php ?>?php echo $sunday; ?<?php ?>>	]
			   ];
 
  var plot1 = $.jqplot('chart1', [line1], {
    title: 'Wochenübersicht(<<?php ?>?php echo $current_week; ?<?php ?>>)',
    series:[{renderer:$.jqplot.BarRenderer}],
	seriesColors: [ "#135089"],  
    axesDefaults: {
		
        tickRenderer: $.jqplot.CanvasAxisTickRenderer ,
        tickOptions: {
          angle: -30,
          fontSize: '10pt'
        }
    },
     axes:{
        xaxis:{
		  renderer: $.jqplot.CategoryAxisRenderer,	
        },
        yaxis:{
          tickOptions:{
          formatString:'%.2f km'
        }
        }
      
    }
  });
});
</script>
<script class="code" type="text/javascript">
$(document).ready(function(){
  var line1=[	
  			<<?php ?>?php 
			foreach($dayofmonthresKM as $monatstag){
				echo "$monatstag,";
			}
			?<?php ?>>
  			];
  var plot2 = $.jqplot('chart2', [line1], {
      title: '<<?php ?>?php echo "Monatsübersicht vom $current_month"; ?<?php ?>>', 
	  seriesColors: [ "#135089"],  
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
  			   <<?php ?>?php
			   	foreach($monthofyear as $monthresKM){
					echo "$monthresKM,";
				}
				?<?php ?>>
			   ];
 
  var plot2 = $.jqplot('chart3', [line1], {
    title: '<<?php ?>?php echo "Jahresübersicht $current_year"; ?<?php ?>> ',
	seriesColors: [ "#135089"],  
     series:[{renderer:$.jqplot.BarRenderer}], 
    axesDefaults: {
        tickRenderer: $.jqplot.CanvasAxisTickRenderer ,
        tickOptions: {
          angle: -30,
          fontSize: '10pt'
        }
    },
     axes:{
        xaxis:{
		  renderer: $.jqplot.CategoryAxisRenderer,	
        },
        yaxis:{
          tickOptions:{
          formatString:'%.2f km'
        }
        }
      
    }
  });
});


</script><?php }} ?>