/*Settings*/var tooltipHeight=187,tooltipWidth=389,preferedTooltipTopPosition=1,preferedTooltipLeftPosition=1,timeTillDisplay=5,timeTillHide=400,rightLeftOffset=10,tooltipTimeout=null,tooltipElement=null;$(document).ready(function(){function e(e,n){pos=$(e).offset();if(pos.top-tooltipHeight<0&&n)return t(e,!1);$(".tooltipContainer").css("top",pos.top-tooltipHeight)}function t(t,n){pos=$(t).offset();if(pos.top+$(t).height()+tooltipHeight>$(document).height()&&n)return e(t,!1);$(".tooltipContainer").css("top",pos.top+$(t).height())}function n(e,t){pos=$(e).offset();if(pos.left-rightLeftOffset<0&&t)return r(e,!1);$(".tooltipContainer").css("left",pos.left-rightLeftOffset)}function r(e,t){pos=$(e).offset();if(pos.left+rightLeftOffset+tooltipWidth>$(document).width()&&t)return n(e,!1);$(".tooltipContainer").css("left",pos.left+rightLeftOffset)}$(".tooltipLinknotif").each(function(){$(this).mouseover(function(){clearTimeout(tooltipTimeout);tooltipElement=this;tooltipTimeout=setTimeout(function(){$(".tooltipContainer").html($($(tooltipElement).children(".toolTipContent")[0]).html());$(".tooltipContainer").width(tooltipWidth);$(".tooltipContainer").height(tooltipHeight);preferedTooltipTopPosition==1?e(tooltipElement,!0):t(tooltipElement,!0);preferedTooltipLeftPosition==1?n(tooltipElement,!0):r(tooltipElement,!0);$(".tooltipContainer").show()},timeTillDisplay)});$(this).mouseout(function(){clearTimeout(tooltipTimeout);tooltipTimeout=setTimeout(function(){$(".tooltipContainer").hide()},timeTillHide)})});$(".tooltipContainer").mouseover(function(){clearTimeout(tooltipTimeout)}).mouseout(function(){clearTimeout(tooltipTimeout);tooltipTimeout=setTimeout(function(){$(".tooltipContainer").hide()},timeTillHide)})});