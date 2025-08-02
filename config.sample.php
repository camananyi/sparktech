<?php
define('DB_HOST', 'SPARK_DBHOST');
define('DB_NAME', 'SPARK_DBNAME');
define('DB_USER', 'SPARK_DBUSERNAME');
define('DB_PASS', 'SPARK_DBPASSWORD');

$pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>