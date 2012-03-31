<link rel="stylesheet" type="text/css" href="jqPlot/jquery.jqplot.min.css"/>
    	<script type="text/javascript" src="jqPlot/plugins/jqplot.highlighter.min.js"></script>
        <script type="text/javascript" src="jqPlot/plugins/jqplot.dateAxisRenderer.min.js"></script>
		<script type="text/javascript" src="jqPlot/plugins/jqplot.canvasTextRenderer.min.js"></script>
        <script type="text/javascript" src="jqPlot/plugins/jqplot.canvasAxisTickRenderer.min.js"></script>
        <script type="text/javascript" src="jqPlot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
        <script type="text/javascript" src="jqPlot/plugins/jqplot.barRenderer.min.js"></script>  
  		<script class="code" type="text/javascript">
  
 $(document).ready(function(){ {literal} 
  var line1 =  [
  			   ['Montag'	, {/literal}{$monday}{literal}  		], 
  			   ['Dienstag'	, {/literal}{$tuesday}{literal}			], 
			   ['Mittwoch'	, {/literal}{$wednesday}{literal} 		], 
			   ['Donnerstag', {/literal}{$thursday}{literal} 		], 
			   ['Freitag'	, {/literal}{$friday}{literal}			], 
			   ['Samstag'	, {/literal}{$saturday}{literal}		], 
			   ['Sonntag'	, {/literal}{$sunday}{literal}			]
			   ];
 
  var plot1 = $.jqplot('chart1', [line1], {
    title: 'Wochenübersicht({/literal}{$current_week}{literal})',
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
  });{/literal}
});

</script>
<script class="code" type="text/javascript">
$(document).ready(function(){ {literal}
  var line1=[	
  			{/literal}
  			{foreach from=$monthkilometer item=dayelement}
            	{$dayelement}
        	{/foreach}
			{literal}
  			];
  var plot2 = $.jqplot('chart2', [line1], {
      title: 'Monatsübersicht vom {/literal}{$current_month}{literal}', 
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
  }); {/literal}
});
</script>          
<script class="code" type="text/javascript">
$(document).ready(function(){ 
  var line1 =  [
  				
  				{foreach from=$yearkilometer item=monthelement}
            		{$monthelement}
        		{/foreach}
				
			   ];
 
  var plot2 = $.jqplot('chart3', [line1], {
    title: 'Jahresübersicht von {$current_year}',
	seriesColors: [ "#135089"],  
    {literal}series:[{renderer:$.jqplot.BarRenderer}], {/literal}
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