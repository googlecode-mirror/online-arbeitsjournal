<?php

require_once("../../db_scripts/connect_db.php");
$PRIMARY_KEY = $_POST['PR_KEY'];
$TABLE = 'eintrag';

$query = "SELECT * FROM $TABLE WHERE eintrag_id = '$PRIMARY_KEY'";

$ergebnis = mysql_query($query);



if (!$ergebnis) {
    die('Ungueltige Anfrage: ' . mysql_error());
}


while ($row = mysql_fetch_object($ergebnis)) {

    echo '<form method="post" action="./bearbeiten_query.php">';
    echo'<table>';

    echo'<tr>';

    echo'<td>ID: </td>';
    echo'<td><input type="textfield" id="id" name ="id" value=' . $row->eintrag_id . ' /></td>';

    echo'</tr>';
    

    echo '<tr>';

    echo'<td>Titel: </td>';
    echo'<td><input type="textfield" id="titel" name="titel" value=' . $row->eintrag_titel . ' /></td>';

    echo'</tr>';

    echo '<tr>';

    echo '<td>Kurzbeschreibung: </td>';
    echo'<td> <textarea rows ="8" cols="50" id="kurzbeschreibung" name ="kurzbeschreibung">' . $row->eintrag_kurz . '</textarea></td>';


    echo '</tr>';


    echo '<tr>';

    echo '<td>Datum: </td>';
    echo '<td><input type = "date" id = "datum" name = "datum" value=' . $row->eintrag_datum . '></td>';

    echo '</tr>';

    echo '<tr>';
    echo '<td>Beschreibung: </td>';
    echo '<td><textarea rows = "16" cols = "50" id = "beschreibung" name = "beschreibung">' . $row->eintrag_lang . ' </textarea></td>';

    echo '</tr>';

    echo '<tr>';

    echo '<td>To Do: </td>';
    echo '<td><textarea rows = "8" cols = "50" id = "naechstes_ziel" name = "naechstes_ziel">' . $row->eintrag_ziel_naechst . '</textarea></td>';

    echo '</tr>';

    echo '<tr>';

    echo '<td><input type = "submit" value = "Updaten" name = "submit"></td>';
    echo '<td><button>Abbrechen</button></td>';

    echo '</tr>';


    echo'</table>';
}

echo '</form>';
?>
