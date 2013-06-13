$(document).ready(function() {
	//window.setInterval($("#notif").click(), 5000);
	$state = false;
	$("#notif").click(function(){
		if(!$state){
			$("#notif_display").show("fast");
			$state = true;
		}else{
			$("#notif_display").hide("fast");
			$state = false;
		}	
	});	
});