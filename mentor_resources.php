<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<body class='container mt-4'>
<?php
session_start();
require 'config.php';
if ($_SESSION['role'] !== 'mentor') exit("Unauthorized.");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $stmt = $pdo->prepare("INSERT INTO mentor_resources (mentor_id, link, description) VALUES (?, ?, ?)");
  $stmt->execute([$_SESSION['user_id'], $_POST['link'], $_POST['desc']]);
}
?>
<form method='post'>
  <input name='link' placeholder='Resource link'><br>
  <input name='desc' placeholder='Description'><br>
  <button>Add</button>
</form>
<?php
foreach ($pdo->query("SELECT * FROM mentor_resources WHERE mentor_id = {$_SESSION['user_id']}") as $row) {
  echo "<p><a href='{$row['link']}' target='_blank'>{$row['description']}</a></p>";
}
?>
</body>