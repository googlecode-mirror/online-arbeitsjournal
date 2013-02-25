<?php

//Benutzerinformationen
$BENUTZERNAME = "adminhutter";
$PASSWORT = "hutter";
$HOST = "127.0.0.1";

//Weitere Benutzer
//$BENUTZERNAME = "adminhutter";
//$PASSWORT = "hutter";
//$HOST = "127.0.0.1";

//Datenbank
$DB = 'arbeitsjournal';

mysql_connect($HOST, $BENUTZERNAME, $PASSWORT) or die("Keine Verbindung moeglich");
mysql_select_db($DB);
