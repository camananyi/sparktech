<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Schedule Meetings</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html">SPARK</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="mentor_resources.php">Mentor Tools</a></li>
        <li class="nav-item"><a class="nav-link" href="submit_progress.php">Progress</a></li>
        <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class='container'>
  <h3>Mentor Meeting Scheduler</h3>
  <p>Use Google Calendar to set up recurring meetings with your mentees.</p>
  <a href='https://calendar.google.com/calendar/u/0/r/eventedit' target='_blank' class='btn btn-outline-success'>Create Google Calendar Event</a>
</div>
</body>
</html>