
<?php
session_start();
require_once 'config.php';
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'parent') {
    header("Location: login.php");
    exit;
}

$children = $pdo->prepare("SELECT id, name FROM users WHERE parent_email = (SELECT email FROM users WHERE id = ?)");
$children->execute([$_SESSION['user_id']]);
$child_ids = array_column($children->fetchAll(), 'id');

$updates = [];
if (!empty($child_ids)) {
    $in = str_repeat('?,', count($child_ids) - 1) . '?';
    $stmt = $pdo->prepare("SELECT u.name, p.summary, p.created_at FROM progress_updates p JOIN users u ON p.mentee_id = u.id WHERE p.mentee_id IN ($in) ORDER BY p.created_at DESC");
    $stmt->execute($child_ids);
    $updates = $stmt->fetchAll();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Parent Dashboard - SPARK</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
  <h2>Your Child's Progress</h2>
  <?php if (empty($updates)): ?>
    <p>No updates yet.</p>
  <?php else: ?>
  <ul class="list-group">
    <?php foreach ($updates as $u): ?>
      <li class="list-group-item">
        <strong><?= htmlspecialchars($u['name']) ?> - <?= htmlspecialchars($u['created_at']) ?></strong><br>
        <?= nl2br(htmlspecialchars($u['summary'])) ?>
      </li>
    <?php endforeach; ?>
  </ul>
  <?php endif; ?>
</body>
</html>
