
<?php
require_once 'config.php';

$pending = $pdo->query("SELECT * FROM users WHERE approved = 0 ORDER BY created_at DESC")->fetchAll();
$approved = $pdo->query("SELECT * FROM users WHERE approved = 1 ORDER BY created_at DESC")->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard - SPARK</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
  <h2 class="mb-4">SPARK Admin Dashboard</h2>

  <ul class="nav nav-tabs" id="dashboardTabs">
    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#pending">Pending Approvals</a></li>
    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#approved">Approved Users</a></li>
  </ul>

  <div class="tab-content mt-3">
    <div class="tab-pane fade show active" id="pending">
      <table class="table table-bordered">
        <thead><tr><th>Name</th><th>Email</th><th>Role</th><th>Action</th></tr></thead>
        <tbody>
          <?php foreach ($pending as $row): ?>
            <tr>
              <td><?= htmlspecialchars($row['name']) ?></td>
              <td><?= htmlspecialchars($row['email']) ?></td>
              <td><?= htmlspecialchars($row['role']) ?></td>
              <td><a class="btn btn-success btn-sm" href="approve.php?id=<?= $row['id'] ?>">Approve</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div class="tab-pane fade" id="approved">
      <table class="table table-bordered">
        <thead><tr><th>Name</th><th>Email</th><th>Role</th><th>Approved At</th></tr></thead>
        <tbody>
          <?php foreach ($approved as $row): ?>
            <tr>
              <td><?= htmlspecialchars($row['name']) ?></td>
              <td><?= htmlspecialchars($row['email']) ?></td>
              <td><?= htmlspecialchars($row['role']) ?></td>
              <td><?= htmlspecialchars($row['created_at']) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
