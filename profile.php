<?php
session_start();
require 'config.php';
if (!isset($_SESSION['user_id'])) exit('Login first.');
echo '
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html">SPARK</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="mentor_resources.php">Mentor Tools</a></li>
        <li class="nav-item"><a class="nav-link" href="submit_progress.php">Progress</a></li>
        <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
';
$id = $_SESSION['user_id'];
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$id]);
$user = $stmt->fetch();
?>
<div class='container'>
  <h3>My Profile</h3>
  <p><strong>Name:</strong> <?= $user['name'] ?></p>
  <p><strong>Email:</strong> <?= $user['email'] ?></p>
  <p><strong>Role:</strong> <?= $user['role'] ?></p>
</div>