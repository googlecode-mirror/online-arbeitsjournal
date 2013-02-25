<?php

require_once("../../db_scripts/connect_db.php");


$titel              =   $_POST['titel'];
$kurzbeschreibung   =   $_POST['kurzbeschreibung'];
$datum              =   $_POST['datum'];
$beschreibung       =   $_POST['beschreibung'];
$todo               =   $_POST['naechstes_ziel'];

$TABLE = 'eintrag';

$query = "  INSERT INTO `$TABLE` (`eintrag_titel`, `eintrag_datum`, `eintrag_von`, `eintrag_bis`, `eintrag_stunden`, 
            `eintrag_kurz`, `eintrag_lang`, `eintrag_ziel_%`, `eintrag_ziel_naechst`, `eintrag_bewertung`) 
            VALUES ('$titel', '$datum', '', '', '', '$kurzbeschreibung', '$beschreibung', '', '$todo', '');";
$abfrage = mysql_query ($query);

if (!$abfrage) {
  die('Ungueltige Anfrage: ' .mysql_error());  
}

else{
    header('location:../../index.php');
}

?>
