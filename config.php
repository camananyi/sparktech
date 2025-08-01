<?php
define('DB_HOST', 'dfsfd.hosting-data.io');
define('DB_NAME', 'fdsfs');
define('DB_USER', 'dasd');
define('DB_PASS', 'gferergter');

$pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>