<?php
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Reset Password</title>
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
  <h3>Reset Password</h3>
  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
      $stmt->execute([$_POST['email']]);
      $user = $stmt->fetch();
      if ($user) {
          $newpass = bin2hex(random_bytes(4));
          $hashed = password_hash($newpass, PASSWORD_DEFAULT);
          $pdo->prepare("UPDATE users SET password = ? WHERE id = ?")->execute([$hashed, $user['id']]);
          mail($_POST['email'], "SPARK Password Reset", "Your new password is: $newpass", "From: noreply@spark.com");
          echo "<div class='alert alert-success'>New password sent</div>";
      } else {
          echo "<div class='alert alert-danger'>Email not found</div>";
      }
  }
  ?>
  <form method='post'>
    <input name='email' placeholder='Enter your email' class='form-control mb-2'><br>
    <button class='btn btn-warning'>Reset</button>
  </form>
</div>
</body>
</html>