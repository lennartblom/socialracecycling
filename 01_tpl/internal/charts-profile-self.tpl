<link rel="stylesheet" type="text/css" href="jqPlot/jquery.jqplot.min.css"/>
    	<script type="text/javascript" src="jqPlot/plugins/jqplot.highlighter.min.js"></script>
        <script type="text/javascript" src="jqPlot/plugins/jqplot.dateAxisRenderer.min.js"></script>
		<script type="text/javascript" src="jqPlot/plugins/jqplot.canvasTextRenderer.min.js"></script>
        <script type="text/javascript" src="jqPlot/plugins/jqplot.canvasAxisTickRenderer.min.js"></script>
        <script type="text/javascript" src="jqPlot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
        <script type="text/javascript" src="jqPlot/plugins/jqplot.barRenderer.min.js"></script>  
     
<script class="code" type="text/javascript">
$(document).ready(function(){ 
  var line1 =  [
  				
  				{foreach from=$yearkilometer item=monthelement}
            		{$monthelement}
        		{/foreach}
				
			   ];
 
  var plot2 = $.jqplot('chart1', [line1], {
    title: 'Monatsaktivitäten des Jahr {$current_year}',
	seriesColors: [ "#135089"],  
    {literal}series:[{renderer:$.jqplot.canvasAxisTickRenderer}], {/literal}
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


</script>