<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Learn | SPARK</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
  body { font-family: 'Segoe UI', sans-serif; background: #f9f9f9; }

  .navbar-custom { background-color: #003366; }

  .page-header {
    background: #f4f7fb;
    padding: 20px 20px;
    text-align: center;
  }
  .page-header h1 { color: #003366; font-weight: 700; }
  .page-header p { color: #666; font-size: 1.1rem; max-width: 600px; margin: 0 auto; }

  .resource-card {
    background: #fff;
    border-radius: 14px;
    padding: 28px 24px;
    height: 100%;
    box-shadow: 0 5px 15px rgba(0,0,0,.08);
    border-top: 6px solid #003366;
    transition: .25s;
    display: flex;
    flex-direction: column;
  }
  .resource-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 25px rgba(0,0,0,.15);
  }

  .resource-icon { font-size: 2.2rem; margin-bottom: 12px; }

  .resource-card h5 { color: #003366; font-weight: 700; margin-bottom: 8px; }
  .resource-card p { color: #555; line-height: 1.5; flex-grow: 1; }

  .resource-card .btn {
    align-self: center;
    margin-top: 12px;
    border-radius: 20px;
  }

  .w3schools   { border-color: #4682B4; }
  .cs50        { border-color: #4682B4; }
  .freecodecamp{ border-color: #4682B4; }
  .khanacademy { border-color: #4682B4; }
  .gwc         { border-color: #4682B4; }

  footer {
    margin-top: 60px;
    background: #333;
    color: white;
    text-align: center;
    padding: 20px;
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
        <li class="nav-item"><a class="nav-link" href="curriculum.html">Curriculum</a></li>
        <li class="nav-item"><a class="nav-link" href="https://forms.gle/B8ms6uRZmQYzZGAR8">Apply</a></li>
        <!-- <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li> -->
        <li class="nav-item"><a class="nav-link" href="https://albums.memento.com/sparktechafrica">Gallery</a></li>
        <li class="nav-item"><a class="nav-link active" href="learn.php">Learn</a></li>
        <li class="nav-item"><a class="nav-link" href="stories.php">Stories</a></li>
      </ul>
    </div>
  </div>
</nav>

<section class="page-header">
  <div class="container">
    <h1>Learning Resources</h1>
    <p>Free courses and communities to help you build your programming foundation alongside the SPARK curriculum.</p>
  </div>
</section>

<div class="container my-5">
  <div class="row g-4">

    <div class="col-12 col-sm-6 col-lg-4">
      <div class="resource-card w3schools">
        <h5>W3Schools</h5>
        <p>Learn HTML, CSS, JavaScript and more with easy to follow along lessons and a live code editor.</p>
        <a href="https://www.w3schools.com" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm">Visit site</a>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-lg-4">
      <div class="resource-card cs50">
        <h5>Harvard CS50</h5>
        <p>Harvard's renowned Intro to Computer Science course — free, rigorous, and beginner-friendly.</p>
        <a href="https://cs50.harvard.edu/x/" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm">Visit site</a>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-lg-4">
      <div class="resource-card freecodecamp">
        <h5>freeCodeCamp</h5>
        <p>Hands-on coding lessons and certifications covering web dev, Python, data science, and more.</p>
        <a href="https://www.freecodecamp.org" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm">Visit site</a>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-lg-4">
      <div class="resource-card khanacademy">
        <h5>Khan Academy</h5>
        <p>Structured programming lessons with instant feedback: great for reinforcing the basics.</p>
        <a href="https://www.khanacademy.org/computing/computer-programming" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm">Visit site</a>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-lg-4">
      <div class="resource-card gwc">
        <h5>Girls Who Code</h5>
        <p>A community with programs, clubs, and resources for girls building a future in tech.</p>
        <a href="https://girlswhocode.com/programs" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm">Visit site</a>
      </div>
    </div>

  </div>
</div>

<footer>
  <p>&copy; 2026 SPARK Initiative. Empowering the next generation of African tech leaders.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>