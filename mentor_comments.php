
<?php
session_start();
require_once 'config.php';
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'mentor') {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $progress_id = $_POST['progress_id'];
    $comment = $_POST['comment'];
    $mentor_id = $_SESSION['user_id'];

    $stmt = $pdo->prepare("INSERT INTO progress_comments (progress_id, mentor_id, comment) VALUES (?, ?, ?)");
    $stmt->execute([$progress_id, $mentor_id, $comment]);

    // Get mentee email
    $userQuery = $pdo->prepare("SELECT u.email, u.name AS mentee_name, m.name AS mentor_name FROM progress_updates p JOIN users u ON p.mentee_id = u.id JOIN users m ON m.id = ? WHERE p.id = ?");
    $userQuery->execute([$mentor_id, $progress_id]);
    $info = $userQuery->fetch();

    $body = "Your mentor {$info['mentor_name']} commented on your progress:

$comment

Please log in to view.";
    mail($info['email'], "SPARK Mentor Comment Notification", $body, "From: SPARK <info@sparktechafrica.com>");
}

$stmt = $pdo->query("SELECT p.id, p.summary, p.created_at, u.name FROM progress_updates p JOIN users u ON p.mentee_id = u.id ORDER BY p.created_at DESC");
$progress = $stmt->fetchAll();
?>
<!-- The HTML part remains unchanged -->
