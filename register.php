<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register | SPARK</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #f5f7fa; font-family: 'Segoe UI', sans-serif; }
    .form-container { max-width: 960px; margin: 40px auto; background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 0 12px rgba(0,0,0,0.1); }
    .navbar-custom { background-color: #003366; }
    .intro-box {
      background: #eaf4ff;
      border-left: 4px solid #003366;
      padding: 15px;
      margin-bottom: 20px;
      font-size: 0.95rem;
    }
  </style>
  
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
  <div class="container">
    <a class="navbar-brand" href="index.html">SPARK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="model.php">Model</a></li>
        <li class="nav-item"><a class="nav-link active" href="register.php">Register</a></li>
        <!-- <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li> -->
        <li class="nav-item"><a class="nav-link" href="https://albums.memento.com/sparktechafrica">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="learn.php">Learn</a></li>
        <li class="nav-item"><a class="nav-link" href="stories.php">Stories</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4 text-center">
    <h2>Register for SPARK</h2>

    <div class="mb-3">
        <button class="btn btn-primary" onclick="showForm('mentor')">
            Mentor Registration
        </button>

        <button class="btn btn-success" onclick="showForm('mentee')">
            Student Registration
        </button>
    </div>

    <iframe
        id="formFrame"
        width="100%"
        height="1215"
        frameborder="0">
    </iframe>
</div>

<script>
function showForm(type) {
    const frame = document.getElementById("formFrame");

    if (type === "mentee") {
        frame.src = "https://docs.google.com/forms/d/e/1FAIpQLSeKdf_P5CB-lE-levyxtetAd2zsGTqXbzfwXf4rfQ6CDhQrCA/viewform?embedded=true";
    } else {
        frame.src = "https://docs.google.com/forms/d/e/1FAIpQLSe5DXtG8qksTWIJM3gP3NXluReMRFQkbryZOsDjoEa43KQcSA/viewform?embedded=true";
    }
}

// Show one by default
showForm("mentee");
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>