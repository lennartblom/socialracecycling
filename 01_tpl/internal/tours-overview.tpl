{include file="01_tpl/header.tpl"}
<h3>Übersicht deiner Aktivitäten | anzeigen, bearbeiten oder löschen</h3>
				
				<form name="tour-menu" method="post" action="tours.php">
				
                    <input type="hidden" name="change_selection_var" value="{$change_selection}">
                    
                    <p>{$error}</p>
                    
                    <p style="text-align:center;">
                            <input type="submit" name="change_selection" value="&larr;" />
                            <input type="submit" name="change_selection" value="&rarr;" /> 
                    </p>
                    <table border="1" id="edittour-tabelle">
                        <tr>
                            <td class="edittour-showtour-headline">Auswahl</td>
                            <td class="edittour-showtour-headline">Datum</td>
                            <td class="edittour-showtour-headline">Typ</td>
                            <td class="edittour-showtour-headline">Distanz</td>
                            <td class="edittour-showtour-headline">Zeit</td>
                            <td class="edittour-showtour-headline">&Oslash; Geschwindigkeit</td>
                            <td class="edittour-showtour-headline">&Oslash; Trittfrequenz</td>
                            <td class="edittour-showtour-headline">&Oslash; Herzfrequenz</td>
                            <td class="edittour-showtour-headline">Höhenmeter</td>
                        </tr>
                            
                    {foreach from=$touren item=touritem}
                        <tr>
                            {$touritem}
                        </tr>
                    {/foreach}
                    </table>
						
                		<p style="text-align:center;">
                            <input type="submit" name="submit" value="Tourdaten anzeigen" />
                            <input type="submit" name="submit" value="Tourdaten bearbeiten" />
                            <input type="submit" name="submit" value="Tourdaten löschen" />
                        </p>
    
                </form>
                
{include file="01_tpl/footer.tpl"}