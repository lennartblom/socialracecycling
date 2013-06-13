$(document).ready(function() {
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