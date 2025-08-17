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
  <script>
    function toggleForms(role) {
      document.querySelectorAll('.role-form').forEach(div => div.style.display = 'none');
      if (role) {
        document.getElementById(role + '-form').style.display = 'block';
      }
    }
  </script>
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
        <li class="nav-item"><a class="nav-link active" href="register.php">Register</a></li>
        <!-- <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li> -->
        <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="learn.php">Learn</a></li>
        <li class="nav-item"><a class="nav-link" href="stories.php">Stories</a></li>
        <li class="nav-item"><a class="nav-link" href="timeline.php">Timeline</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="form-container">
    <h2 class="mb-4 text-primary text-center">SPARK Registration</h2>

    <div class="mb-4">
      <label class="form-label">I am a:</label>
      <select class="form-select" onchange="toggleForms(this.value)">
        <option value="">-- Select Role --</option>
        <option value="mentee">Mentee (Student)</option>
        <option value="mentor">Mentor</option>
      </select>
    </div>

    <!-- Mentee Form -->
    <form id="mentee-form" class="role-form" style="display:none" action="submit_registration.php" method="POST">
      <div class="intro-box">
        <strong>Are you a girl in Africa who’s passionate about STEM?</strong><br>
        SPARK helps you connect with a mentor who understands your dreams and wants to help you grow.<br><br>
        ✨ No experience required — just curiosity, drive, and an open mind.<br><br>
        When you apply, we’ll get to know you and pair you with someone who aligns with your goals.
      </div>
      <input type="hidden" name="role" value="mentee">
      <div class="mb-3"><input type="text" name="name" class="form-control" placeholder="Full Name" required></div>
      <!-- <div class="mb-3"><input type="number" name="age" class="form-control" placeholder="Age" required></div> -->
      <!-- <div class="mb-3"><input type="text" name="school" class="form-control" placeholder="School" required></div> -->
      <div class="mb-3"><input type="email" name="email" class="form-control" placeholder="Email" required></div>
      <!-- <div class="mb-3"><textarea name="why" class="form-control" placeholder="Why do you want to join SPARK Tech Africa?" required></textarea></div>
      <div class="mb-3"><textarea name="experience" class="form-control" placeholder="Any previous tech experience?"></textarea></div> -->
      <a href="https://forms.gle/rEPUZEzLk6HTaU229" button type="submit" class="btn btn-primary">Register as Mentee</button>
    </form>

    <!-- Mentor Form -->
    <form id="mentor-form" class="role-form" style="display:none" action="submit_registration.php" method="POST">
      <div class="intro-box">
        <strong>Are you a woman in Silicon Valley with experience in tech or STEM?</strong><br>
        SPARK gives you the chance to mentor a passionate girl in Africa who’s eager to learn and grow in this field.<br><br>
        ✨ No teaching background needed — just empathy, experience, and a willingness to guide.<br><br>
        When you apply, we’ll learn about your interests and match you with a mentee who shares your passions.
      </div>
      <input type="hidden" name="role" value="mentor">
      <div class="mb-3"><input type="text" name="name" class="form-control" placeholder="Full Name" required></div>
      <div class="mb-3"><input type="email" name="email" class="form-control" placeholder="Email" required></div>
      <div class="mb-3"><input type="text" name="phone" class="form-control" placeholder="Phone"></div>
      <div class="mb-3"><input type="text" name="org" class="form-control" placeholder="Organization or Company"></div>
      <div class="mb-3"><input type="text" name="linkedin" class="form-control" placeholder="LinkedIn URL"></div>
      <div class="mb-3"><textarea name="bio" class="form-control" placeholder="Brief Bio"></textarea></div>
      <div class="mb-3">
        <label>Areas of Interest:</label><br>
        <input type="checkbox" name="interests[]" value="Web Dev"> Web Dev
        <input type="checkbox" name="interests[]" value="AI/ML"> AI/ML
        <input type="checkbox" name="interests[]" value="Mobile Apps"> Mobile Apps
        <input type="checkbox" name="interests[]" value="Career Guidance"> Career Guidance
      </div>
      <div class="mb-3"><input type="text" name="availability" class="form-control" placeholder="Availability (e.g. Weekends 3–5pm)"></div>
      <button type="submit" class="btn btn-success">Register as Mentor</button>
    </form>

    <!-- Parent Form -->
    <form id="parent-form" class="role-form" style="display:none" action="submit_registration.php" method="POST">
      <input type="hidden" name="role" value="parent">
      <div class="mb-3"><input type="text" name="name" class="form-control" placeholder="Your Full Name" required></div>
      <div class="mb-3"><input type="email" name="email" class="form-control" placeholder="Your Email" required></div>
      <div class="mb-3"><input type="text" name="phone" class="form-control" placeholder="Phone"></div>
      <div class="mb-3"><input type="number" name="num_kids" class="form-control" placeholder="Number of Kids" required></div>
      <div class="mb-3"><input type="text" name="child_name" class="form-control" placeholder="Child's Full Name" required></div>
      <div class="mb-3"><input type="email" name="child_email" class="form-control" placeholder="Child's Email" required></div>
      <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" name="consent" value="1" required>
        <label class="form-check-label">I consent to my child joining the SPARK program.</label>
      </div>
      <button type="submit" class="btn btn-secondary">Register as Parent</button>
    </form>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>