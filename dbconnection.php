<?php
session_start();
//faccio i require_once di functions.php e database.php, mi sarà necessario fare un require_once di questo file in ogni file che necessita di connessione al database
require_once("functions.php");
require_once("database.php");
$dbh = new DatabaseHelper("localhost", "root", "", "makeup_store", 3306);
//istanza di DatabaseHelper, con i parametri per la connessione al database makeup_store locale su porta 3306 (default MySQL)
?>