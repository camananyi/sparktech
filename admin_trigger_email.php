
<?php
session_start();
require_once 'config.php';
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    die("Access denied");
}
include 'weekly_summary_cron.php';
echo "Weekly summary emails sent.";
?>
