
<?php
session_start();
require_once 'config.php';
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'mentor') {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $link = $_POST['link'] ?? '';
    $filename = '';

    if (!empty($_FILES['file']['name'])) {
        $target_dir = "uploads/";
        if (!file_exists($target_dir)) mkdir($target_dir, 0755, true);
        $filename = time() . "_" . basename($_FILES["file"]["name"]);
        $target_file = $target_dir . $filename;
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    }

    $stmt = $pdo->prepare("INSERT INTO mentor_resources (mentor_id, title, link, filename) VALUES (?, ?, ?, ?)");
    $stmt->execute([$_SESSION['user_id'], $title, $link, $filename]);
}
$resources = $pdo->prepare("SELECT * FROM mentor_resources WHERE mentor_id = ?");
$resources->execute([$_SESSION['user_id']]);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Mentor Resources - SPARK</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
  <h2>Upload or Share Learning Resources</h2>
  <form method="POST" enctype="multipart/form-data">
    <div class="mb-3"><label>Resource Title</label><input type="text" class="form-control" name="title" required></div>
    <div class="mb-3"><label>Link (optional)</label><input type="url" class="form-control" name="link"></div>
    <div class="mb-3"><label>Upload a File</label><input type="file" class="form-control" name="file"></div>
    <button class="btn btn-primary">Submit</button>
  </form>
  <h4 class="mt-5">Your Resources</h4>
  <ul class="list-group">
  <?php foreach ($resources as $r): ?>
    <li class="list-group-item">
      <strong><?= htmlspecialchars($r['title']) ?></strong><br>
      <?php if ($r['link']): ?><a href="<?= htmlspecialchars($r['link']) ?>" target="_blank">View Link</a><br><?php endif; ?>
      <?php if ($r['filename']): ?><a href="uploads/<?= htmlspecialchars($r['filename']) ?>" download>Download File</a><?php endif; ?>
    </li>
  <?php endforeach; ?>
  </ul>
</body>
</html>
