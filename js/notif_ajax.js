$(document).ready(function() {
	window.setInterval(callNotifTimer, 10000);
});	

function callNotifTimer() {
	$.ajax({
		url: 'notif_timer.php',
        data: "",
         success: function(data) {
            $('#notif_display').html(data);
			}
	});
}
