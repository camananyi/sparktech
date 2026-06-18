<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Model | SPARK</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
    font-family: 'Segoe UI', sans-serif;
    background-color: #f8f9fa;
}

.navbar-custom {
    background-color: #003366;
}

.hero {
    background: #0055aa;
    color: white;
    text-align: center;
    padding: 100px 10px;
}

.hero h1 {
    font-size: 3.5rem;
    font-weight: bold;
}

.hero p {
    max-width: 700px;
    margin: auto;
    font-size: 1.2rem;
}

.section-title {
    text-align: center;
    margin-bottom: 50px;
    font-weight: bold;
}

.feature-card {
    background: white;
    border-radius: 15px;
    padding: 30px;
    height: 100%;
    box-shadow: 0 5px 15px rgba(0,0,0,.08);
    transition: 0.3s;
}

.feature-card:hover {
    transform: translateY(-5px);
}

.feature-card i {
    font-size: 3rem;
    color: #003366;
    margin-bottom: 15px;
}

.stats {
    background: #003366;
    color: white;
    padding: 60px 20px;
}

.stats h2 {
    font-size: 3rem;
    font-weight: bold;
}

.project-card {
    background: white;
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0 5px 15px rgba(0,0,0,.08);
    height: 100%;
}

.cta {
    background: linear-gradient(135deg, #0055aa, #003366);
    color: white;
    text-align: center;
    padding: 80px 20px;
}

footer {
    background: #222;
    color: white;
    text-align: center;
    padding: 20px;
}

.timeline-number {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: #003366;
    color: white;
    font-size: 1.8rem;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: auto auto 20px;
}
</style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.html">SPARK</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="model.php">Model</a></li>
                <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                <li class="nav-item"><a class="nav-link" href="https://albums.memento.com/sparktechafrica">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="learn.php">Learn</a></li>
                <li class="nav-item"><a class="nav-link" href="stories.php">Stories</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero -->
<section class="hero">
    <div class="container">
        <h1>Learn. Build. Create.</h1>
        <p class="mt-4">
            SPARK Tech Africa empowers students with computer science skills
            through structured learning, hands-on coding projects, and mentor support.
        </p>
    </div>
</section>

<!-- Intro -->
<section class="container py-5">
    <h2 class="section-title">What Is SPARK?</h2>

    <div class="row justify-content-center">
        <div class="col-lg-9">
            <p class="lead text-center">
                SPARK Tech Africa is a technology education program designed to help
                students develop foundational computer science and programming skills.
                Students progress through a structured online curriculum and then
                apply what they learn by creating a final project of their own.
            </p>
        </div>
    </div>
</section>

<!-- Journey -->
<section class="container py-5">
    <h2 class="section-title">Your SPARK Journey</h2>

    <div class="row g-4">

        <div class="col-md-3">
            <div class="feature-card text-center">
                <div class="timeline-number">1</div>
                <h4>Apply</h4>
                <p>
                    Submit an application and join the next SPARK cohort.
                </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="feature-card text-center">
                <div class="timeline-number">2</div>
                <h4>Learn</h4>
                <p>
                    Complete lessons, coding exercises, and assignments through Google Classroom.
                </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="feature-card text-center">
                <div class="timeline-number">3</div>
                <h4>Build</h4>
                <p>
                    Design and create a final project using the skills you've learned.
                </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="feature-card text-center">
                <div class="timeline-number">4</div>
                <h4>Get Support</h4>
                <p>
                    Request help from volunteer mentors whenever you need guidance.
                </p>
            </div>
        </div>

    </div>
</section>

<!-- Benefits -->
<section class="container py-5">
    <h2 class="section-title">Why This Model Works</h2>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="feature-card text-center">
                <i class="bi bi-laptop"></i>
                <h4>In-depth Online Learning</h4>
                <p>
                    Students can learn on their own schedule, with indepth videos to guide them.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-card text-center">
                <i class="bi bi-lightbulb"></i>
                <h4>Project-Based</h4>
                <p>
                    Learning is reinforced through problem sets and projects rather than memorization.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-card text-center">
                <i class="bi bi-people"></i>
                <h4>Mentor Support</h4>
                <p>
                    Students receive guidance when they need it while remaining independent learners.
                </p>
            </div>
        </div>

    </div>
</section>

<!-- Projects -->
<section class="container py-5">
    <h2 class="section-title">Projects Students Could Build</h2>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="project-card">
                <h4>Games</h4>
                <p>
                    Quiz games, number guessing games, adventure games, and more.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="project-card">
                <h4>Tools</h4>
                <p>
                    Budget Tracker, To-Do List, Password Generator
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="project-card">
                <h4>Creative & Storytelling</h4>
                <p>
                    Story generator, fortune teller, madlibs, interactive story
                </p>
            </div>
        </div>

    </div>
</section>

<!-- Support Section -->
<section class="container py-5">
    <h2 class="section-title">Need Help?</h2>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="feature-card text-center">
                <i class="bi bi-chat-dots"></i>
                <h4>Mentor Assistance Available</h4>

                <p>
                    If a student becomes stuck on a lesson, coding challenge,
                    or project component, they can submit a support request.
                    A volunteer mentor will schedule a meeting to provide guidance
                    and help them continue progressing.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta">
    <div class="container">
        <h1>Ready to Start Your Coding Journey?</h1>

        <p class="lead mt-3">
            Join a community of students learning technology skills and building real projects.
        </p>

        <a href="https://forms.gle/dChDTe9hmuDxktRG7" class="btn btn-light btn-lg mt-3">
            Sign Up
        </a>
    </div>
</section>

<!-- Footer -->
<footer>
    © 2025 SPARK Initiative. Empowering the next generation of African tech leaders.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>