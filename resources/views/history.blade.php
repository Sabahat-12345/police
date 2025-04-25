<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>History - Gilgit Baltistan Police</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --gb-blue: #0047AB;
            --gb-dark: #232b3f;
            --gb-gold: #FFD700;
        }

        .hero-header {
            background: linear-gradient(rgba(35, 43, 63, 0.9), rgba(35, 43, 63, 0.9)),
                        url('https://media.gettyimages.com/id/91748265/photo/pakistani-mounted-police-patrol-outside-army-headquarters-during-an-encounter-with-militants-in.jpg?s=612x612&w=gi&k=20&c=WGCOllRzKCAhPz6qTOCWKyNRL8XLcMr_l-OnJ22SyUQ=') center/cover;
            color: white;
            padding: 100px 0;
            position: relative;
        }

        .timeline {
            position: relative;
            padding: 40px 0;
        }

        .timeline-item {
            position: relative;
            padding: 20px 40px;
            margin: 20px 0;
            background: white;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .timeline-item:hover {
            transform: translateX(10px);
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -15px;
            top: 20px;
            width: 30px;
            height: 30px;
            background: var(--gb-blue);
            border-radius: 50%;
        }

        .core-values {
            background: #f8f9fa;
            padding: 60px 0;
        }

        .value-card {
            border-left: 4px solid var(--gb-blue);
            transition: all 0.3s ease;
        }

        .value-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .historical-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .historical-img:hover {
            transform: scale(1.03);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: var(--gb-dark);">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('assets/police.png')}}" alt="GB Police Logo" height="40">
                GB Police History
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#timeline">Timeline</a></li>
                    <li class="nav-item"><a class="nav-link" href="#values">Values</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Header -->
    <header class="hero-header text-center">
        <div class="container">
            <h1 class="display-3 fw-bold mb-4">Proud Legacy of Service</h1>
            <p class="lead">Safeguarding Gilgit-Baltistan since 1948</p>
        </div>
    </header>

    <main class="container my-5">
        <!-- Introduction -->
        <section class="mb-5">
            <p class="lead text-center mb-4">The Gilgit Baltistan Police has evolved from a small colonial-era force to a modern, professional organization committed to excellence in public safety and community service.</p>
        </section>

        <!-- Historical Timeline -->
        <section id="timeline" class="timeline">
            <h2 class="text-center mb-5 display-5 fw-bold text-dark">Historical Milestones</h2>
            
            <div class="timeline-item">
                <h3><i class="bi bi-flag-fill text-primary me-2"></i>1948 - Foundation</h3>
                <p>Establishment of the first organized police force following the liberation of Gilgit-Baltistan</p>
            </div>

            <div class="timeline-item">
                <h3><i class="bi bi-building text-primary me-2"></i>1965 - Modernization</h3>
                <p>Introduction of specialized units and formal training programs</p>
            </div>

            <div class="timeline-item">
                <h3><i class="bi bi-shield-check text-primary me-2"></i>2001 - Anti-Terrorism Unit</h3>
                <p>Creation of specialized counter-terrorism force to address emerging security challenges</p>
            </div>

            <div class="timeline-item">
                <h3><i class="bi bi-person-badge text-primary me-2"></i>2015 - Women Integration</h3>
                <p>First female officers recruited, marking new era of gender inclusion</p>
            </div>
        </section>

        <!-- Core Values -->
        <section id="values" class="core-values my-5">
            <div class="container">
                <h2 class="text-center mb-5 display-5 fw-bold">Our Core Values</h2>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="value-card p-4 h-100">
                            <i class="bi bi-shield-check display-4 text-primary mb-3"></i>
                            <h4>Integrity</h4>
                            <p>Upholding the highest ethical standards in all operations</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="value-card p-4 h-100">
                            <i class="bi bi-people display-4 text-primary mb-3"></i>
                            <h4>Community</h4>
                            <p>Working collaboratively with citizens for safer neighborhoods</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="value-card p-4 h-100">
                            <i class="bi bi-lightbulb display-4 text-primary mb-3"></i>
                            <h4>Innovation</h4>
                            <p>Adopting modern policing techniques and technologies</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="value-card p-4 h-100">
                            <i class="bi bi-heart-pulse display-4 text-primary mb-3"></i>
                            <h4>Courage</h4>
                            <p>Protecting citizens with dedication and bravery</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Historical Gallery -->
        <section id="gallery" class="my-5">
            <h2 class="text-center mb-5 display-5 fw-bold">Historical Gallery</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <img src="{{asset('assets/history1.jpg')}}" alt="Vintage Police Uniforms" class="img-fluid historical-img">
                    <p class="mt-2 text-muted text-center">1950s Police Uniforms</p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset('assets/history2.jpg')}}" alt="First Police Station" class="img-fluid historical-img">
                    <p class="mt-2 text-muted text-center">First Police Headquarters</p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset('assets/history3.jpg')}}" alt="Modern Force" class="img-fluid historical-img">
                    <p class="mt-2 text-muted text-center">Modern Specialized Units</p>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5>Archives</h5>
                    <p class="mb-0"><a href="#" class="text-white">Historical Documents</a></p>
                    <p><a href="#" class="text-white">Past Leadership</a></p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Contact</h5>
                    <p class="mb-0">history@gbpolice.gov.pk</p>
                    <p>05811-HISTORY (4478)</p>
                </div>
                <div class="col-md-4">
                    <h5>Follow</h5>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" class="text-white"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>
            <p class="mt-3 mb-0">&copy; 2023 Gilgit Baltistan Police - All rights reserved</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>