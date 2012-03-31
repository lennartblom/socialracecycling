{include file="01_tpl/header.tpl"}
<h3>Ausführliche Informationen über das Projekt</h3>
            <table id="text-table-about">
            	<tr>
                	<td valign="top" class="about-text">
                    	<p class="about-long">
                        Dieses Projekt ist auf keinen Fall darauf ausgelegt, möglichst hohe Klickraten, Informationen über die Nutzer zu speichern oder sonstiges zu erreichen. Es ist einfach dazu da, eine nützliche Internetseite für Personen bereitzustellen, die sich gerne mit dem Thema Radsport beschäftigen. <br />
                        <br />
Durch privates Rennradtraining ist mir aufgefallen, dass ich gerne meine Tourdaten abspeichere. Häufig wurde das von mir in Excel Tabellen gemacht. Doch eines Tages dachte ich mir, dass ich meine Kenntnisse im Bereich Webdesign für ein mögliches Projekt nutzen kann. Sicherlich erfüllt eine einfache Exceltabelle auch ihren Zweck. Doch ich dachte mir, dass eine Art Internetportal auf alle Fälle leichter, unproblematischer und vor allem deutlich schöner sei. Ich fing an mir Gedanken über die Umsetzung zu machen, fertigte erste Skizzen des Website-Aufbaus an und startete die Arbeit...<br />
                        </p>
               </td>
                    <td class="about-image"><img src="images/about/image-one.jpg" alt="Kleiner Überblick über die Website" width="320" height="230" /></td>
                </tr>
                <tr>
                	<td colspan="2" class="about-image" valign="top"><img  style="float:left;" src="images/about/image-two.jpg" alt="Formular für die Tourdaten-Eingabe" width="303" height="184" />
                    	<p style="float:right;" class="about-long">
                        Schon am Anfang bemerkte ich, dass das Projekt viel Arbeit sein wird. Im Großen und Ganzen macht mir die Arbeit so viel Spaß, dass ich nicht so schnell aufgeben wollte. Zu Beginn dachte ich mir die Grundfunktionen des Programms aus. Erst einmal wollte ich die Grundstruktur simpel und benutzerfreundlich erstellen.<br />
<br />
Es können Touren hinzugefügt werden, die der Benutzer mit individuellen Daten erstellen kann. Vorerst werde ich das Ganze simpel belassen. Das heißt, man kann Datum, Dauer, Distanz und Durchschnittsgeschwindigkeit angeben. Optional wären dann noch Angaben zur Trittfrequenz. Bekanntlich hat aber nun mal nicht jeder einen Tacho, der so eine Funktion bietet.

                        </p>
                    </td>
                </tr>
                <tr>
                	<td colspan="2">
                    	<p class="about-long">
                        Mithilfe eines persönlichen Kalenders werden alle Touren, die eingetragen worden sind, bequem in die Monatsübersicht eingetragen und man erhält eine gut strukturierte Übersicht über sein eigenes Training.<br />
                        <br />
                        Um dieses Ergebnis zu erzielen, wurde ein eigenes Benutzersystem mittels PHP erstellt. Dieses System erzielt somit, dass der Benutzer frei von äußeren Eingriffen der anderen Benutzer seine persönlichen Trainingsergebnisse einsehen und bearbeiten kann.
                        </p>
                    </td>
                </tr>
                <tr>
                	<td colspan="2">
                    	<p class="about-verylong">
                        <br />
                        <br />
                        Das System des ganzen Projektes ist recht einfach zu verstehen.<br />
Bei der Registrierung wird für jeden Benutzer eine Datentabelle erstellt, die vorerst nur angegebene Daten wie Email, Passwort und Name enthält (die Tabelle ist gemeint). Doch nun kommt es dazu, dass jedem registrierten Benutzer eine weitere Tabelle erstellt wird. In dieser "Datenbank" werden nun sämtliche Informationen über jegliche Aktiviten bzw. eingetragenen Touren des Benutzers abgespeichert.<br />
<br />
Diese Datenbank wird nun Grundelement sämtlicher Funktionen des Planers. Sowohl Wochenbilanzen, als auch der Kalender greifen ab sofort auf diese Daten zu und erstellen somit ein individuelles Profil des Benutzers...
                        </p>
                    </td>
                </tr>
            </table>
            <img style="display:block; margin-left:auto;margin-right:auto;" src="images/schaubild.jpg" alt="Gesamtübersicht" width="810" height="263" /> 
            <div style="margin-left:60px;" id="text-box">
                <p>Alle Daten werden auf einen privaten Sever gespeichert. Dies geschieht natürlich alles vertraulich. Falls irgendwelche Punkte geklärt werden müssen, kannst du dich einfach bei mir melden. Zur Kontaktaufnahme geht es <a href="http://www.lennart-blom.de/kontaktinformationen/">hier</a>(externer Verweis auf www.lennart-blom.de).</p>
                <p><a href="index.php">Hier</a> geht es zur Startseite</p>
           </div>
           
{include file="01_tpl/footer.tpl"}