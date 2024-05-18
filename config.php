<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'football_club');
define('DB_USER', 'user');
define('DB_PASS', 'password123');
/*Se reporteaza toate erorrile cu exceptia celor de tip NOTICE si DEPRECATED */
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
?>