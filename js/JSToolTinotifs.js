/*Settings*/
var notifTooltipHeight = 600;
var notifTooltipWidth = 374;/*Both px values*/

var preferedTooltipTopPosition =1; /*1=top, 2=bottom*/
var preferedTooltipLeftPosition = 1; /*1=left, 2=right*/

var timeTillDisplay = 5;
var timeTillHide = 400;

var rightLeftOffset = 10;

var tooltipTimeout = null;
var tooltipElement = null;
$(document).ready(function (){
    function displayTooltipTop(topToWhat, trySpace){
        pos = $(topToWhat).offset();
        if((pos.top - notifTooltipHeight) < 0){
            if(trySpace)
                return displayTooltipBottom(topToWhat, false);
        }
        $(".notifTooltipContainer").css("top", pos.top - notifTooltipHeight);
    }
    function displayTooltipBottom(bottomToWhat, trySpace){
        pos = $(bottomToWhat).offset();
        if((pos.top + $(bottomToWhat).height() + notifTooltipHeight) > $(document).height()){
            if(trySpace)
                return displayTooltipTop(bottomToWhat, false);
        }
        $(".notifTooltipContainer").css("top", pos.top+$(bottomToWhat).height());
    }
    function displayTooltipLeft(leftToWhat, trySpace){
        pos = $(leftToWhat).offset();
        if((pos.left - rightLeftOffset) < 0){
            if(trySpace)
                return displayTooltipRight(leftToWhat, false);
        }
        $(".notifTooltipContainer").css("left", pos.left - rightLeftOffset);
    }
    function displayTooltipRight(rightToWhat, trySpace){
        pos = $(rightToWhat).offset();
        if((pos.left + rightLeftOffset + notifTooltipWidth) > $(document).width()){
            if(trySpace)
                return displayTooltipLeft(rightToWhat, false);
        }
        $(".notifTooltipContainer").css("left", pos.left+rightLeftOffset);
    }
    $(".tooltipLinknotif").each(function(){
        $(this).mouseover(function(){
            clearTimeout(tooltipTimeout);
            tooltipElement = this;
            tooltipTimeout = setTimeout(function(){
                $(".notifTooltipContainer").html($($(tooltipElement).children(".toolTipContent")[0]).html());
                $(".notifTooltipContainer").width(notifTooltipWidth);
                $(".notifTooltipContainer").height(notifTooltipHeight);
                if(preferedTooltipTopPosition == 1){
                    displayTooltipTop(tooltipElement, true);
                } else {
                    displayTooltipBottom(tooltipElement, true);
                }
                if(preferedTooltipLeftPosition == 1){
                    displayTooltipLeft(tooltipElement, true);
                } else {
                    displayTooltipRight(tooltipElement, true);
                }
                $(".notifTooltipContainer").show();
            }, timeTillDisplay);
        });
        $(this).mouseout(function(){
            clearTimeout(tooltipTimeout);
            tooltipTimeout = setTimeout(function(){
                $(".notifTooltipContainer").hide();
            }, timeTillHide);
        });
    });
	$(".tooltipLink").mouseover(function(){
		$(".notifTooltipContainer").hide();
	});
    $(".notifTooltipContainer").mouseover(function(){
        clearTimeout(tooltipTimeout);
    }).mouseout(function(){
        clearTimeout(tooltipTimeout);
        tooltipTimeout = setTimeout(function(){
            $(".notifTooltipContainer").hide();
        }, timeTillHide);
    });
});