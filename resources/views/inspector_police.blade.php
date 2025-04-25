<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inspector General of Police - Gilgit Baltistan Police</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --gb-blue: #0047AB;
            --gb-dark: #232b3f;
            --gb-gold: #FFD700;
        }

        .igp-hero {
            background: linear-gradient(rgba(35, 43, 63, 0.9), rgba(35, 43, 63, 0.9)),
                        url("{{asset('assets/head.jpg')}}") center/cover;
            color: white;
            padding: 100px 0;
        }

        .profile-card {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .profile-card:hover {
            transform: translateY(-10px);
        }

        .badge-custom {
            background-color: var(--gb-blue);
            color: white;
        }

        .leadership-qualities i {
            color: var(--gb-blue);
            font-size: 1.5rem;
        }

        .message-section {
            border-left: 4px solid var(--gb-blue);
            background: #f8f9fa;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: var(--gb-dark);">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('assets/police.png')}}" alt="GB Police Logo" height="40">
                GB Police Leadership
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#message">Message</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="igp-hero text-center">
        <div class="container">
            <h1 class="display-3 fw-bold mb-3">Inspector General of Police</h1>
            <p class="lead">Gilgit-Baltistan Police Department</p>
        </div>
    </header>

    <main class="container my-5">
        <!-- Profile Section -->
        <section id="about" class="row g-5 align-items-center mb-5">
            <div class="col-lg-4">
                <div class="profile-card">
                    <img src="{{asset('assets/igp.jpg')}}" alt="IGP Profile" class="img-fluid rounded-top">
                    <div class="p-4">
                        <h3 class="mb-0">Mr. Muhammad Saeed</h3>
                        <p class="text-muted mb-2">Inspector General of Police</p>
                        <div class="d-flex gap-2 mb-3">
                            <span class="badge badge-custom rounded-pill">PSP</span>
                            <span class="badge badge-custom rounded-pill">35 Years Service</span>
                        </div>
                        <div class="leadership-qualities">
                            <p><i class="bi bi-award"></i> Nishan-e-Imtiaz Recipient</p>
                            <p><i class="bi bi-shield-check"></i> Counter-Terrorism Expert</p>
                            <p><i class="bi bi-gear"></i> Police Modernization Architect</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <h2 class="display-5 fw-bold mb-4">Profile Overview</h2>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded">
                            <h5><i class="bi bi-building"></i> Current Posting</h5>
                            <p class="mb-0">Inspector General of Police, Gilgit-Baltistan (Since 2022)</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 bg-light rounded">
                            <h5><i class="bi bi-mortarboard"></i> Education</h5>
                            <p class="mb-0">MSc Criminology, Oxford University</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <h4>Key Responsibilities</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">✔️ Strategic leadership of GB Police Force</li>
                            <li class="list-group-item">✔️ Implementation of security policies</li>
                            <li class="list-group-item">✔️ Oversight of criminal justice administration</li>
                            <li class="list-group-item">✔️ Community policing initiatives</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Message Section -->
        <section id="message" class="message-section p-5 mb-5">
            <h2 class="display-6 fw-bold mb-4">Message from the IGP</h2>
            <blockquote class="blockquote">
                <p class="fs-4">"Our commitment to the people of Gilgit-Baltistan remains unwavering. We strive to create a safe environment where every citizen can thrive, through professional policing and community partnership."</p>
                <footer class="blockquote-footer mt-3">Muhammad Saeed, <cite>Inspector General of Police</cite></footer>
            </blockquote>
        </section>

        <!-- Initiatives Section -->
        <section class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <i class="bi bi-shield-lock display-4 text-primary mb-3"></i>
                        <h4>Security Initiatives</h4>
                        <ul class="list-unstyled">
                            <li>✓ Smart Surveillance System</li>
                            <li>✓ Tourist Police Force</li>
                            <li>✓ Cyber Crime Unit</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <i class="bi bi-people display-4 text-primary mb-3"></i>
                        <h4>Community Programs</h4>
                        <ul class="list-unstyled">
                            <li>✓ Police Youth Liaison</li>
                            <li>✓ Women Safety App</li>
                            <li>✓ Neighborhood Watch</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body">
                        <i class="bi bi-graph-up display-4 text-primary mb-3"></i>
                        <h4>Performance</h4>
                        <ul class="list-unstyled">
                            <li>✓ 40% Crime Reduction</li>
                            <li>✓ 95% Case Resolution</li>
                            <li>✓ 50K Citizens Trained</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="bg-light p-5 rounded-3 mb-5">
            <h2 class="display-6 fw-bold mb-4">IGP Secretariat</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-3">
                        <h5><i class="bi bi-geo-alt"></i> Address</h5>
                        <p>IGP Office, Police Headquarters<br>Jutial, Gilgit<br>Gilgit-Baltistan</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3">
                        <h5><i class="bi bi-telephone"></i> Contact</h5>
                        <p>Office: 05811-44000<br>Emergency: 1122<br>Email: igp@gbpolice.gov.pk</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3">
                        <h5><i class="bi bi-clock"></i> Office Hours</h5>
                        <p>Mon-Fri: 9AM - 5PM<br>Public Reception: 10AM-1PM</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p class="mb-0">&copy; 2023 Gilgit Baltistan Police. All rights reserved</p>
            <p class="mb-0">Follow us: 
                <a href="#" class="text-white"><i class="bi bi-twitter mx-2"></i></a>
                <a href="#" class="text-white"><i class="bi bi-facebook mx-2"></i></a>
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>