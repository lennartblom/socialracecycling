<?php /* Smarty version Smarty-3.1.8, created on 2013-10-29 09:37:51
         compiled from "01_tpl/internal/charts-profile-self.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9083405951ac7b82bd95c0-17097163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '129f2184ddcfba6191ad2114286fc77629a43fdb' => 
    array (
      0 => '01_tpl/internal/charts-profile-self.tpl',
      1 => 1383038275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9083405951ac7b82bd95c0-17097163',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ac7b82ccc054_13452392',
  'variables' => 
  array (
    'yearkilometer' => 0,
    'monthelement' => 0,
    'current_year' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac7b82ccc054_13452392')) {function content_51ac7b82ccc054_13452392($_smarty_tpl) {?><link rel="stylesheet" type="text/css" href="jqPlot/jquery.jqplot.min.css"/>
    	<script type="text/javascript" src="jqPlot/plugins/jqplot.highlighter.min.js"></script>
        <script type="text/javascript" src="jqPlot/plugins/jqplot.dateAxisRenderer.min.js"></script>
		<script type="text/javascript" src="jqPlot/plugins/jqplot.canvasTextRenderer.min.js"></script>
        <script type="text/javascript" src="jqPlot/plugins/jqplot.canvasAxisTickRenderer.min.js"></script>
        <script type="text/javascript" src="jqPlot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
        <script type="text/javascript" src="jqPlot/plugins/jqplot.barRenderer.min.js"></script>  
     
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
 
  var plot2 = $.jqplot('chart1', [line1], {
    title: 'Monatsaktivitäten des Jahr <?php echo $_smarty_tpl->tpl_vars['current_year']->value;?>
',
	seriesColors: [ "#135089"],  
    series:[{renderer:$.jqplot.canvasAxisTickRenderer}], 
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
		  tickOptions:{
            formatString:'. Monat'
          } 
        },
        yaxis:{
          tickOptions:{
          formatString:'%.0f Akt.'
        }
        }
      
    } ,
	highlighter: {
        show: true,
        sizeAdjust: 7.5
		
      },
      cursor: {
        show: true
      }
  }); 
});


</script><?php }} ?>