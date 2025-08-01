
<?php
require_once 'config.php';

$id = intval($_GET['id']);
$token = bin2hex(random_bytes(16));

// Insert token for password setup
$stmt = $pdo->prepare("INSERT INTO registration_tokens (user_id, token) VALUES (?, ?)");
$stmt->execute([$id, $token]);

// Approve the user
$pdo->prepare("UPDATE users SET approved = 1 WHERE id = ?")->execute([$id]);

// Notify the user
$user = $pdo->query("SELECT email FROM users WHERE id = $id")->fetch();
$link = "https://yourdomain.com/setup_password.php?token=$token";

mail($user['email'], "Set up your SPARK login",
     "You're approved! Click to set your password:
$link",
     "From: info@sparktechafrica.com");

header("Location: dashboard.php");
