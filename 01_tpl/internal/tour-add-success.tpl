{include file="01_tpl/header.tpl"}

<img style="float:right;margin-right:100px;" src="images/haeckchen.jpg" alt="Häckchen nach der Abschließung der Tourdokumentation" width="200" height="200">
<h3>Datentransfer war erfolgreich!</h3>
<div style="margin-left:110px;margin-bottom:50px;" id="errorbox-green">
<p style="font-weight:bold;font-family:arial; font-size:14px;color:#007125;">Die Tour konnte zu Ihrer Datenbank hinzugefügt werden!</p>
<p style="font-weight:bold;font-family:arial; font-size:12px;color:#007125;">Die Tour am {$tag}.{$monat}.{$jahr} wurde mit folgenden Daten hinzugefügt:</p>
<p style="font-weight:bold;font-family:arial; font-size:12px;color:#007125;">Die Durschnittsgeschwindigkeit betrug bei {$zeit} Stunden Fahrzeit ca. {$durchschnitt} km/h. <br />
Die Gesamtdistanz war {$distanz} Kilometer.
</div>
<a href="tour-menu.php" style="margin-left:50px;">Zurück zu Tourübersicht</a>



{include file="01_tpl/footer.tpl"}