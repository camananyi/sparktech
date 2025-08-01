<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<body class='container mt-4'>
<?php
session_start();
require 'config.php';
if ($_SESSION['role'] !== 'user') exit("Not authorized.");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $stmt = $pdo->prepare("INSERT INTO progress (mentee_id, mentee_name, parent_email, update) VALUES (?, ?, ?, ?)");
  $stmt->execute([$_SESSION['user_id'], $_SESSION['name'], $_POST['parent_email'], $_POST['update']]);
  mail($_POST['parent_email'], 'SPARK: Mentee Progress', "Hi,\nYour child {$_SESSION['name']} has submitted a progress update:\n{$_POST['update']}", "From: noreply@spark.com");
  echo "Update sent!";
}
?>
<form method='post'>
  <input name='parent_email' placeholder='Parent Email'><br>
  <textarea name='update' placeholder='Weekly update...' required></textarea><br>
  <button>Submit</button>
</form>
</body>