<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<body class='container mt-4'>
<?php
require 'config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $stmt = $pdo->prepare("UPDATE users SET approved = 1 WHERE id = ?");
  $stmt->execute([$_POST['user_id']]);
}
foreach ($pdo->query("SELECT * FROM users WHERE approved = 0") as $user) {
  echo "<form method='post'><input type='hidden' name='user_id' value='{$user['id']}'> {$user['name']} ({$user['role']}) - {$user['email']} <button>Approve</button></form>";
}
?>
</body>