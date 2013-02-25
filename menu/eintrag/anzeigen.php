<?php

$ergebnis = mysql_query("SELECT * FROM eintrag");


if (mysql_num_rows($ergebnis) == 0) {
    echo 'Keine Datensaetze gefunden.';
} 

else {
    echo "<table>";

//Definiere Titel für Tabelle, werden aber nur angezeigt, falls auch Einträge vorhanden sind.
    echo'<tr>';
    echo'<th align="left">Nummer</th>';
    echo'<th align="left">Titel</th>';
    echo'<th align="left">Kurzbeschreibung</th>';
    echo'<th align="left">Datum</th>';
    echo'<th align="left">Beschreibung</th>';
    echo'<th align="left">To Do</th>';
    echo'<th align="left">Bearbeitung</th>';
}




while ($row = mysql_fetch_object($ergebnis)) {
    echo '<tr>';
    echo '<td>', $row->eintrag_id, '</td>';
    echo '<td>', $row->eintrag_titel, '</td>';
    echo '<td>', $row->eintrag_kurz, '</td>';
    echo '<td>', $row->eintrag_datum, '</td>';
    echo '<td>', $row->eintrag_lang, '</td>';
    echo '<td>', $row->eintrag_ziel_naechst, '</td>';
    
    echo'<td>'; 
    echo'<form action="menu/eintrag/loeschen.php" method="post" style="display:inline">';
    echo '<input type="hidden" name="PR_KEY" value="' . $row->eintrag_id . '"/>';
    echo '<input type="submit" name="button" value="Löschen"/>';
    echo '</form>';
    
    
    echo '<form action="menu/eintrag/bearbeiten.php" method="post" style="display:inline">';
    echo '<input type="hidden" name="PR_KEY" value="' . $row->eintrag_id . '"/>';
    echo '<input type="submit" name="button" value="Bearbeiten"/>';
    echo "</form></td>";
}
echo '</table>';
?>


