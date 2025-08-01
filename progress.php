
<?php
session_start();
require_once 'config.php';
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'mentee') {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $summary = $_POST['summary'] ?? '';
    $filename = '';

    if (!empty($_FILES['file']['name'])) {
        $target_dir = "uploads/";
        if (!file_exists($target_dir)) mkdir($target_dir, 0755, true);
        $filename = time() . "_" . basename($_FILES["file"]["name"]);
        $target_file = $target_dir . $filename;
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    }

    $stmt = $pdo->prepare("INSERT INTO progress_updates (mentee_id, summary, filename) VALUES (?, ?, ?)");
    $stmt->execute([$_SESSION['user_id'], $summary, $filename]);

    // Notify all mentors
    $mentors = $pdo->query("SELECT email FROM users WHERE role = 'mentor' AND approved = 1")->fetchAll();
    $mentee_name = $pdo->prepare("SELECT name FROM users WHERE id = ?");
    $mentee_name->execute([$_SESSION['user_id']]);
    $name = $mentee_name->fetchColumn();

    foreach ($mentors as $mentor) {
        $body = "New progress update from $name.

Summary:
$summary

Log in to comment.";
        mail($mentor['email'], "New SPARK Progress Update", $body, "From: SPARK <info@sparktechafrica.com>");
    }
}

$updates = $pdo->prepare("SELECT * FROM progress_updates WHERE mentee_id = ? ORDER BY created_at DESC");
$updates->execute([$_SESSION['user_id']]);
?>
<!-- The HTML part remains unchanged -->
