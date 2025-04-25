<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Response - GB Police Control Room</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        .police-theme {
            background-color: #004AAD;
            color: white;
        }
        .emergency-card {
            border-left: 5px solid #FF0000;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header class="police-theme py-3">
        <div class="container">
            <div class="d-flex align-items-center">
                <img src="{{asset('assets/police.png')}}" alt="GB Police Logo" style="height: 50px;" class="me-3">
                <div>
                    <h1 class="h4 mb-0">Gilgit Baltistan Police</h1>
                    <p class="mb-0">24/7 Emergency Services</p>
                </div>
            </div>
        </div>
    </header>

    <main class="container my-5">
        <h1 class="text-center mb-4" role="heading" aria-level="1">Police Control Room</h1>
        
        <!-- Emergency Contact Card -->
        <div class="card emergency-card mb-4">
            <div class="card-body">
                <h2 class="h4 card-title" role="heading" aria-level="2"><i class="bi bi-telephone-fill text-danger me-2"></i>Emergency Contacts</h2>
                <div class="row">
                    <div class="col-md-6">
                        <p class="card-text">
                            <strong>Emergency Hotline:</strong><br>
                            <a href="tel:05811930033" class="btn btn-danger mt-2">
                                <i class="bi bi-telephone-outbound-fill"></i> Call 05811930033
                            </a>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="card-text">
                            <strong>Email:</strong><br>
                            <a href="mailto:controlroom@gbpolice.gov.pk" class="btn btn-outline-primary mt-2">
                                <i class="bi bi-envelope-fill"></i> controlroom@gbpolice.gov.pk
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Section -->
        <section aria-label="Services provided" class="mb-5">
            <h2 class="h4 mb-3" role="heading" aria-level="2"><i class="bi bi-list-task me-2"></i>Services Provided</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <i class="bi bi-speedometer2 fs-3 text-primary"></i>
                            <h3 class="h6 mt-2">Rapid Response</h3>
                            <p class="small mb-0">24/7 emergency coordination and dispatch</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <i class="bi bi-shield-check fs-3 text-success"></i>
                            <h3 class="h6 mt-2">Public Safety</h3>
                            <p class="small mb-0">Monitoring & maintaining law and order</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <i class="bi bi-globe fs-3 text-info"></i>
                            <h3 class="h6 mt-2">Tourist Assistance</h3>
                            <p class="small mb-0">Special support for visitors in distress</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <i class="bi bi-geo-alt fs-3 text-warning"></i>
                            <h3 class="h6 mt-2">Area Coordination</h3>
                            <p class="small mb-0">Regional emergency management</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Location Section -->
        <section aria-label="Control room location" class="mb-5">
            <h2 class="h4 mb-3" role="heading" aria-level="2"><i class="bi bi-geo-fill me-2"></i>Our Location</h2>
            <div class="card">
                <div class="card-body">
                    <p class="card-text">
                        <strong>GB Police Headquarters</strong><br>
                        Jutial, Gilgit<br>
                        Gilgit-Baltistan, Pakistan
                    </p>
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d810.6348347848465!2d74.3010455291951!3d35.92113879869245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e639e2e9d9d3c1%3A0x1469e6d3d5d3a7b0!2sGilgit%20Baltistan%20Police%20Headquarters!5e0!3m2!1sen!2s!4v1718874858915!5m2!1sen!2s" 
                                style="border:0;" allowfullscreen="" loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade" title="GB Police Headquarters Location">
                        </iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="police-theme py-4 mt-5">
        <div class="container text-center small">
            <p class="mb-0">© 2023 Gilgit Baltistan Police. All rights reserved.</p>
            <p class="mb-0">Emergency: 05811930033 | Non-Emergency: 05811930034</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>