<?php
// Inicijalizacija sesije
session_start();
// Zatvaranje svih session varijabli
$_SESSION = array();
// Zatvaranje sesije
session_destroy();
// Redirect na stranicu login.html 
header("location: login.html");
exit;
?>