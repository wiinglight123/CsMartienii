<?php
require_once "config.php";
//Stabilim conexiunea cu serverul MySQL
$conexiune = mysqli_connect(DB_HOST, DB_USER, DB_PASS);
if (!$conexiune) {
    die('Eroare conectare la baza de date: ' . mysqli_connect_error());
}
mysqli_select_db($conexiune, DB_NAME) or die("Eroare la selectarea bazei de date " .
    mysqli_error($conexiune));
?>