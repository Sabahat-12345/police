<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Press Release - Gilgit Baltistan Police</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --gb-blue: #0047AB;
            --gb-dark: #232b3f;
            --gb-light: #f8f9fa;
        }
        
        body {
            background-color: var(--gb-light);
        }
        
        .navbar {
            background-color: var(--gb-blue);
            border-bottom: 3px solid #ffd700;
        }
        
        .press-release-card {
            background: white;
            border: none;
            border-radius: 10px;
            transition: transform 0.3s ease;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }
        
        .press-release-card:hover {
            transform: translateY(-5px);
        }
        
        .press-release-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--gb-dark);
            border-left: 4px solid var(--gb-blue);
            padding-left: 1rem;
        }
        
        .press-release-date {
            font-size: 0.9rem;
            color: #6c757d;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .badge-custom {
            background-color: var(--gb-blue);
            color: white;
            font-weight: 500;
        }
        
        .download-btn {
            border-color: var(--gb-blue);
            color: var(--gb-blue);
        }
        
        .download-btn:hover {
            background-color: var(--gb-blue);
            color: white;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('assets/police.png')}}" alt="GB Police Logo" height="50" class="d-inline-block align-text-top me-2">
                Gilgit Baltistan Police
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#press Releases"><i class="bi bi-newspaper"></i> Press Releases</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-info-circle"></i> About</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="{{route('helpline')}}"><i class="bi bi-envelope"></i> Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-5">
        <h1 class="text-center mb-5 display-4 fw-bold text-dark">Official Press Releases</h1>
        
        <!-- Press Release 1 -->
        <article class="press-release-card mb-4 p-4">
            <div class="d-flex justify-content-between align-items-start mb-3">
                <div>
                    <span class="badge badge-custom rounded-pill mb-2">Security Update</span>
                    <h2 class="press-release-title">New Public Safety Initiative Launched</h2>
                </div>
                <p class="press-release-date">
                    <i class="bi bi-calendar-event"></i> March 24, 2025
                </p>
            </div>
            <p class="text-secondary mb-4">The Gilgit Baltistan Police has announced a comprehensive public safety initiative aimed at enhancing security measures across the region. Key features include:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item">✅ Increased police patrolling in tourist areas</li>
                <li class="list-group-item">✅ Enhanced emergency response systems</li>
                <li class="list-group-item">✅ Community safety awareness programs</li>
            </ul>
            <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">Issued by: Public Relations Office</small>
                <button class="btn download-btn">
                    <i class="bi bi-download"></i> Download PDF
                </button>
            </div>
        </article>

        <!-- Press Release 2 -->
        <article class="press-release-card mb-4 p-4">
            <div class="d-flex justify-content-between align-items-start mb-3">
                <div>
                    <span class="badge badge-custom rounded-pill mb-2">Criminal Justice</span>
                    <h2 class="press-release-title">Major Organized Crime Network Dismantled</h2>
                </div>
                <p class="press-release-date">
                    <i class="bi bi-calendar-event"></i> March 20, 2025
                </p>
            </div>
            <p class="text-secondary mb-4">In a coordinated operation spanning multiple districts, GB Police has successfully disrupted a major criminal network. Operation highlights include:</p>
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="alert alert-success h-100">
                        <h5 class="alert-heading">15 Arrests Made</h5>
                        Including key organization leaders
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="alert alert-info h-100">
                        <h5 class="alert-heading">Evidence Collected</h5>
                        Digital devices & financial records seized
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="alert alert-warning h-100">
                        <h5 class="alert-heading">Ongoing Investigation</h5>
                        Further details to be released
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">Issued by: Criminal Investigation Department</small>
                <button class="btn download-btn">
                    <i class="bi bi-download"></i> Download PDF
                </button>
            </div>
        </article>
    </main>

    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5>Contact Information</h5>
                    <p class="mb-0">24/7 Helpline: 05811-4357</p>
                    <p>Email: media.gbpolice.gov.pk</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Follow Us</h5>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" class="text-white"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <p class="mb-1"><a href="#" class="text-white">Archives</a></p>
                    <p class="mb-1"><a href="#" class="text-white">FAQ</a></p>
                </div>
            </div>
            <p class="mt-3 mb-0">© 2025 Gilgit Baltistan Police. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>