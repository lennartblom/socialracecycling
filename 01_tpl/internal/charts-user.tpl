 <link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="jqPlot/jquery.jqplot.min.css"/>
<script type="text/javascript" src="jqPlot/plugins/jqplot.highlighter.min.js"></script>
<script type="text/javascript" src="jqPlot/plugins/jqplot.dateAxisRenderer.min.js"></script>
<script type="text/javascript" src="jqPlot/plugins/jqplot.canvasTextRenderer.min.js"></script>
<script type="text/javascript" src="jqPlot/plugins/jqplot.canvasAxisTickRenderer.min.js"></script>
<script type="text/javascript" src="jqPlot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
<script type="text/javascript" src="jqPlot/plugins/jqplot.barRenderer.min.js"></script>

<script class="code" type="text/javascript">
$(document).ready(function(){
      var line1 =  [{$monday_1}, {$tuesday_1}, {$wednesday_1}, {$thursday_1}, {$friday_1}, {$saturday_1}, {$sunday_1}];
      var line2 =  [{$monday_2}, {$tuesday_2}, {$wednesday_2}, {$thursday_2}, {$friday_2}, {$saturday_2}, {$sunday_2}];
    // Can specify a custom tick Array.
    // Ticks should match up one for each y value (category) in the series.
    var ticks = ['Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag', 'Sonntag'];

		plot1 = $.jqplot('chart1', [line1, line2], {
		title: 'Wochenübersicht({$current_week})',
		seriesColors: [ "#ff1e00", "#135089"],  
        // The "seriesDefaults" option is an options object that will
        // be applied to all series in the chart.
        seriesDefaults:{
            renderer:$.jqplot.BarRenderer,
           {literal} rendererOptions: {fillToZero: true}{/literal}
        },
        // Custom labels for the series are specified with the "label"
        // option on the series option.  Here a series option object
        // is specified for each series.
        series:[
           {literal} {label:'Deine Trainingsdaten'},
            {label:{/literal}'Trainingsdaten von {$vorname} {$nachname}'},
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
                {literal}tickOptions: {formatString: '%dkm'}{/literal}
            }
        }
    });
});
</script>

<script class="code" type="text/javascript">
$(document).ready(function(){
   var line1=[	
  			
  			{foreach from=$monthkilometer_1 item=dayelement_1}
            	{$dayelement_1}
        	{/foreach}
			
  			];
  var line2=[	
  			
  			{foreach from=$monthkilometer_2 item=dayelement_2}
            	{$dayelement_2}
        	{/foreach}
			
  			];
  var plot2 = $.jqplot('chart2', [line1, line2], {
      title: 'Monatsübersicht vom {$current_month}', 
	  seriesColors: [ "#ff1e00", "#135089"],  
	  series:[
            {literal}{label:'Deine Trainingsdaten'},
            {label:{/literal}'Trainingsdaten von {$vorname} {$nachname}'},
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
  				
  				{foreach from=$yearkilometer_1 item=monthelement_1}
            		{$monthelement_1},
        		{/foreach}
				
			   ];
      var line2 =  [
  				
  				{foreach from=$yearkilometer_2 item=monthelement_2}
            		{$monthelement_2},
        		{/foreach}
				
			   ];
    // Can specify a custom tick Array.
    // Ticks should match up one for each y value (category) in the series.
    var ticks = ['Jan', 'Feb', 'März', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sept', 'Okt', 'Nov', 'Dez'];

		plot1 = $.jqplot('chart3', [line1, line2], {
		title: 'Jahresübersicht von {$current_year}',
		seriesColors: [ "#ff1e00", "#135089"],  
        // The "seriesDefaults" option is an options object that will
        // be applied to all series in the chart.
        seriesDefaults:{
            renderer:$.jqplot.BarRenderer,
             {literal}rendererOptions: {fillToZero: true}{/literal}
        },
        // Custom labels for the series are specified with the "label"
        // option on the series option.  Here a series option object
        // is specified for each series.
        series:[
            {literal} {label:'Deine Trainingsdaten'},            
			{label:{/literal}'Trainingsdaten von {$vorname} {$nachname}'}, 
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
                {literal} tickOptions: {formatString: '%dkm'} {/literal}
            }
        }
    });
});
</script>


