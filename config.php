<?php
define('DB_HOST', '${{ secrets.SPARK_DBHOST }}');
define('DB_NAME', '${{ secrets.SPARK_DBNAME }}');
define('DB_USER', '${{ secrets.SPARK_DBUSERNAME }}');
define('DB_PASS', '${{ secrets.SPARK_DBPASSWORD }}');

$pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>