<?php /* Smarty version Smarty-3.1.8, created on 2012-04-08 13:28:10
         compiled from "01_tpl/internal/charts-self.tpl" */ ?>
<?php /*%%SmartyHeaderCode:878974334f81926aa0d568-20069318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '345aaca00e2f359b47439c5637332233ef0205fb' => 
    array (
      0 => '01_tpl/internal/charts-self.tpl',
      1 => 1331759717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '878974334f81926aa0d568-20069318',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'monday' => 0,
    'tuesday' => 0,
    'wednesday' => 0,
    'thursday' => 0,
    'friday' => 0,
    'saturday' => 0,
    'sunday' => 0,
    'current_week' => 0,
    'monthkilometer' => 0,
    'dayelement' => 0,
    'current_month' => 0,
    'yearkilometer' => 0,
    'monthelement' => 0,
    'current_year' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f81926aa9cbe4_77786213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f81926aa9cbe4_77786213')) {function content_4f81926aa9cbe4_77786213($_smarty_tpl) {?><link rel="stylesheet" type="text/css" href="jqPlot/jquery.jqplot.min.css"/>
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
  			   ['Dienstag'	, <?php echo $_smarty_tpl->tpl_vars['tuesday']->value;?>
			], 
			   ['Mittwoch'	, <?php echo $_smarty_tpl->tpl_vars['wednesday']->value;?>
 		], 
			   ['Donnerstag', <?php echo $_smarty_tpl->tpl_vars['thursday']->value;?>
 		], 
			   ['Freitag'	, <?php echo $_smarty_tpl->tpl_vars['friday']->value;?>
			], 
			   ['Samstag'	, <?php echo $_smarty_tpl->tpl_vars['saturday']->value;?>
		], 
			   ['Sonntag'	, <?php echo $_smarty_tpl->tpl_vars['sunday']->value;?>
			]
			   ];
 
  var plot1 = $.jqplot('chart1', [line1], {
    title: 'Wochenübersicht(<?php echo $_smarty_tpl->tpl_vars['current_week']->value;?>
)',
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
  			
  			<?php  $_smarty_tpl->tpl_vars['dayelement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dayelement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['monthkilometer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dayelement']->key => $_smarty_tpl->tpl_vars['dayelement']->value){
$_smarty_tpl->tpl_vars['dayelement']->_loop = true;
?>
            	<?php echo $_smarty_tpl->tpl_vars['dayelement']->value;?>

        	<?php } ?>
			
  			];
  var plot2 = $.jqplot('chart2', [line1], {
      title: 'Monatsübersicht vom <?php echo $_smarty_tpl->tpl_vars['current_month']->value;?>
', 
	  seriesColors: ["#135089"],  
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
  				
  				<?php  $_smarty_tpl->tpl_vars['monthelement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['monthelement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['yearkilometer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['monthelement']->key => $_smarty_tpl->tpl_vars['monthelement']->value){
$_smarty_tpl->tpl_vars['monthelement']->_loop = true;
?>
            		<?php echo $_smarty_tpl->tpl_vars['monthelement']->value;?>

        		<?php } ?>
				
			   ];
 
  var plot2 = $.jqplot('chart3', [line1], {
    title: 'Jahresübersicht von <?php echo $_smarty_tpl->tpl_vars['current_year']->value;?>
',
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