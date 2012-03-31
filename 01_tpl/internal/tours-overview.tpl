{include file="01_tpl/header.tpl"}
<h3>bearbeiten, löschen, anzeigen | Touren</h3>
				
				<form name="tour-menu" method="post" action="tours.php">
				
                    <input type="hidden" name="change_selection_var" value="{$change_selection}">
                    
                    <p>{$error}</p>
                    
                    <table border="1" id="edittour-tabelle">
                        <tr>
                            <td class="edittour-showtour-headline">Auswahl</td>
                            <td class="edittour-showtour-headline">Datum</td>
                            <td class="edittour-showtour-headline">gesamte Distanz</td>
                            <td class="edittour-showtour-headline">Zeit(in Minuten)</td>
                            <td class="edittour-showtour-headline">durchsch. Geschwindig.</td>
                            <td class="edittour-showtour-headline">durchsch. Trittfrequ.</td>
                            <td class="edittour-showtour-headline">Höhendifferenz</td>
                        </tr>
                            
                    {foreach from=$touren item=touritem}
                        <tr>
                            {$touritem}
                        </tr>
                    {/foreach}
                    </table>
						
						
                
                		<input style="margin-left:50px;margin-top:25px;" type="submit" name="submit" value="Tourdaten löschen" />
                        <input type="submit" name="submit" value="Tourdaten anzeigen" />
                        <input type="submit" name="submit" value="Tourdaten bearbeiten" />
                        <input type="submit" name="change_selection" value="&larr;" />
                        <input type="submit" name="change_selection" value="&rarr;" /> 
    
                </form>
                
{include file="01_tpl/footer.tpl"}