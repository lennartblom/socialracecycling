{include file="01_tpl/header.tpl"}
			<h5>Mitgliederliste</h5>
            <h6>Klicke die Auswahlbox an und schau dir die Profile an</h6>
            
            <p class="about-text-new" style="text-align:center;">Die Mitglieder werden dem Datum ihrer letzten Aktivität sortiert</p>
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
                                <td class="edittour-showtour-headline"> </td>
                                <td class="edittour-showtour-headline">folgen</td>
                                <td class="edittour-showtour-headline">Vorname</td>
                                <td class="edittour-showtour-headline">Nachname</td>
                                <td class="edittour-showtour-headline">Reg. Datum</td>
                                <td class="edittour-showtour-headline">aktiv?</td>
                                <td class="edittour-showtour-headline">Land</td>
                                 <td class="edittour-showtour-headline">Team</td>
                            </tr>
                        
                        {foreach from=$mitgliederliste item=benutzer}
                            <tr>
                                {$benutzer}
                            </tr>
                        {/foreach}
                                                    
                </table>
                </form>
                


{include file="01_tpl/footer.tpl"}