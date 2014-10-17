<?php
/*
DATABASE Config
 */
$DB_HOST = 'tunnel.pagodabox.com';
$DB_USER = 'cierra';
$DB_PASSWORD = 'buzFR5VN';
$DB_NAME = 'LaunchBox';
$DB_DRIVER = 'mysql';

$connect = new mysqli( $_SERVER["DB1_HOST"],  $_SERVER["DB1_USER"],
                      $_SERVER["DB1_PASS"], $_SERVER["DB1_NAME"], $_SERVER["DB1_PORT"]);

mysqli_set_charset($connect, 'utf8');
?>