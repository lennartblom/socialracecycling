{include file="01_tpl/header.tpl"}
			<h3>Mitgliederliste</h3>
                <form action="usercp-mitgliederliste.php" method="post">
                    <input type="hidden" name="change_selection_mitgliederliste" value="{$change_selection}">
                    <p style="text-align:center;">
                        <input type="submit" name="change_selection_mitgliederliste_button" value="&laquo;" />
                        <input type="submit" name="change_selection_mitgliederliste_button" value="&raquo;" />
                    </p> 
                </form>
                <form action="usercp-profile_information.php" method="post">	
                <table border="1" id="edittour-tabelle">
                            <tr>
                                <td class="edittour-showtour-headline">Auswahl</td>
                                <td class="edittour-showtour-headline">Vorname</td>
                                <td class="edittour-showtour-headline">Nachname</td>
                                <td class="edittour-showtour-headline">Registrierungsdatum</td>
                                <td class="edittour-showtour-headline">Geburtstag</td>
                                <td class="edittour-showtour-headline">Land</td>
                            </tr>
                        
                        {foreach from=$mitgliederliste item=benutzer}
                            <tr>
                                {$benutzer}
                            </tr>
                        {/foreach}
                                                    
                </table>
                <p style="text-align:left;"><input type="submit" value="Profil anzeigen" name="show_profile" /></p>
                </form>
                


{include file="01_tpl/footer.tpl"}