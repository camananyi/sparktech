<?php
session_start();
$images = glob("uploads/*.{jpg,jpeg,png,gif,mp4}", GLOB_BRACE);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Media Gallery | SPARK</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
  <style>
    body { font-family: 'Segoe UI', sans-serif; }
    .hero { background-color: #f9f9f9; padding: 60px 20px; text-align: center; }
    .features { padding: 40px 20px; }
    .feature-card {
      padding: 20px;
      border-radius: 12px;
      background: #fff;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    footer {
      padding: 20px;
      background: #333;
      color: #fff;
      text-align: center;
    }
    .navbar-custom {
      background-color: #003366;
    }
    .carousel-item img {
      height: 450px;
      object-fit: cover;
    }
  </style>
  
<body>
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
  <div class="container">
    <a class="navbar-brand" href="#">SPARK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="learn.php">Learn</a></li>
        <li class="nav-item"><a class="nav-link" href="stories.php">Stories</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container my-4">
  <h2 class="mb-4 text-center">SPARK Showcase Gallery</h2>
  <div class="row">
    <?php foreach($images as $file): ?>
      <div class="col-md-4 mb-4">
        <div class="card">
          <?php if (preg_match('/\.mp4$/', $file)): ?>
            <video class="w-100" controls><source src="<?= $file ?>" type="video/mp4"></video>
          <?php else: ?>
            <img src="<?= $file ?>" class="card-img-top" />
          <?php endif; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
</body>
</html>