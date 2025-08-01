
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Welcome - SPARK</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
  <h2>Welcome, <?= htmlspecialchars($_SESSION['name']) ?>!</h2>
  <p>Your role: <?= htmlspecialchars($_SESSION['role']) ?></p>
  <a href="logout.php" class="btn btn-danger mt-2">Logout</a>

  <?php if ($_SESSION['role'] === 'mentee'): ?>
    <a href="progress.php" class="btn btn-info mt-3">View Your Progress</a>
  <?php elseif ($_SESSION['role'] === 'mentor'): ?>
    <a href="resources.php" class="btn btn-info mt-3">Upload Resources</a>
  <?php endif; ?>
</body>
</html>
