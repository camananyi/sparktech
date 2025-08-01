<?php
session_start();
require 'config.php';
if (!isset($_SESSION['user_id'])) exit('Login first.');
?>
<!DOCTYPE html>
<html>
<head>
<title>Upload Media</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

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

<div class='container'>
  <h3>Upload Media</h3>
  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['media'])) {
      $target = "uploads/" . basename($_FILES['media']['name']);
      if (move_uploaded_file($_FILES['media']['tmp_name'], $target)) {
          echo "<div class='alert alert-success'>Upload successful</div>";
      } else {
          echo "<div class='alert alert-danger'>Upload failed</div>";
      }
  }
  ?>
  <form method='post' enctype='multipart/form-data'>
    <input type='file' name='media' class='form-control mb-2'>
    <button class='btn btn-primary'>Upload</button>
  </form>
</div>
</body>
</html>