<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strategic Objectives - Gilgit Baltistan Police</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --gbp-blue: #1a237e;
            --gbp-gold: #ffd700;
        }

        .hero-section {
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                url('https://media.gettyimages.com/id/91748263/photo/pakistani-mounted-police-patrol-outside-army-headquarters-during-an-encounter-with-militants-in.jpg?s=612x612&w=gi&k=20&c=lRpwXke9Q5clwj6F-7c6FBr6hdHcpGjHWeqwY5PcdIs=');
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    height: 60vh;
}


        .goal-card {
            border-left: 4px solid var(--gbp-blue);
            transition: transform 0.3s ease;
        }

        .goal-card:hover {
            transform: translateY(-5px);
            border-left-color: var(--gbp-gold);
        }

        .progress-bar-custom {
            height: 8px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('assets/police.png')}}" alt="GB Police" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{route('goal')}}">Goals</a></li>
                   
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section text-white d-flex align-items-center">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Our Commitments</h1>
            <p class="lead mb-4">Moving Towards a Safer Gilgit-Baltistan</p>
        </div>
    </section>

    <!-- Goals Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Goal 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="goal-card card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-shield-alt fa-2x text-primary me-3"></i>
                                <h3 class="mb-0">Public Safety</h3>
                            </div>
                            <p class="text-muted">Reduce crime rate by 40% (2023-2025)</p>
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-custom bg-success" style="width: 65%"></div>
                            </div>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Upgrade surveillance system</li>
                                <li><i class="fas fa-check text-success me-2"></i>Rapid response teams</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Goal 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="goal-card card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-hands-helping fa-2x text-primary me-3"></i>
                                <h3 class="mb-0">Community Trust</h3>
                            </div>
                            <p class="text-muted">Achieve 85% public satisfaction rate (by 2024)</p>
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-custom bg-info" style="width: 45%"></div>
                            </div>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Monthly public hearings</li>
                                <li><i class="fas fa-running text-warning me-2"></i>Youth engagement programs</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Goal 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="goal-card card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-traffic-light fa-2x text-primary me-3"></i>
                                <h3 class="mb-0">Traffic Management</h3>
                            </div>
                            <p class="text-muted">Reduce road accidents by 50% (by 2025)</p>
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-custom bg-warning" style="width: 30%"></div>
                            </div>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Install smart traffic signals</li>
                                <li><i class="fas fa-running text-warning me-2"></i>Driver training camps</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Goal 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="goal-card card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-microscope fa-2x text-primary me-3"></i>
                                <h3 class="mb-0">Technological Advancement</h3>
                            </div>
                            <p class="text-muted">100% digital records (by 2024)</p>
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-custom bg-danger" style="width: 75%"></div>
                            </div>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>e-FIR system</li>
                                <li><i class="fas fa-check text-success me-2"></i>Biometric attendance</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="{{route('helpline')}}" class="btn btn-primary btn-lg px-4">
                    <i class="fas fa-hands-helping me-2"></i>
                    Contribute
                </a>
                <p class="mt-3 text-muted">Join our 150+ active collaborators</p>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
