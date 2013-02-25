<?php
require_once("../../db_scripts/connect_db.php");

$eintrag_delete =  $_POST['PR_KEY'];



$query = "DELETE FROM `arbeitsjournal`.`eintrag` WHERE `eintrag_id`='$eintrag_delete'";
$abfrage = mysql_query ($query);

if (!$abfrage) {
  die('Ungueltige Anfrage: ' .mysql_error());  
}
else{
    
  header('location:../../index.php');  
    
}

?>
