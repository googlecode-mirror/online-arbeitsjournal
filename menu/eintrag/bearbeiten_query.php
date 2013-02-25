<?php
require_once("../../db_scripts/connect_db.php");

$id                 =   $_POST['id'];
$titel              =   $_POST['titel'];
$kurzbeschreibung   =   $_POST['kurzbeschreibung'];
$datum              =   $_POST['datum'];
$beschreibung       =   $_POST['beschreibung'];
$todo               =   $_POST['naechstes_ziel'];




$query = "  UPDATE `arbeitsjournal`.`eintrag` SET `eintrag_titel`='$titel', 
            `eintrag_kurz`='$kurzbeschreibung', `eintrag_datum`='$datum', `eintrag_lang`='$beschreibung', 
            `eintrag_ziel_naechst`='$todo' WHERE `eintrag_id`='$id';";


$abfrage = mysql_query ($query);

if (!$abfrage) {
  die('Ungueltige Anfrage: ' .mysql_error());  
}

else{
    
    header('location:../../index.php');
}

?>
