{include file="01_tpl/header.tpl"}

<h3>Benachrichtigungen</h3>
		
<script>		
	var ID = {$curUser};
	var link = document.URL;
	$.ajax({
		url: "../notif_display.php",
		data: "user="+ID+"&url="+link+"&showall",
		success: function(data){
					$("#notif-display").html(data);
				}
	});
	function callNotifDisplay(){
		var ID = {$curUser};
		var link = document.URL;
		$.ajax({
			url: "../notif_display.php",
			data: "user="+ID+"&url="+link+"&showall",
			success: function(data){
						$("#notif-display").html(data);
					}
		});
	}
	var timer_display= window.setInterval(callNotifDisplay,10000);
</script>

<div id="notif-display"></div>

{include file="01_tpl/footer.tpl"}