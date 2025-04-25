<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourist Assistance - GB Police Helpline</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        .tourism-theme {
            background-color: #2A5C40;
            color: white;
        }
        .emergency-card {
            border-left: 5px solid #FFC107;
        }
        .service-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header class="tourism-theme py-3">
        <div class="container">
            <div class="d-flex align-items-center">
                <img src="{{asset('assets/police.png')}}" alt="Tourism GB Logo" style="height: 50px;" class="me-3">
                <div>
                    <h1 class="h4 mb-0">Gilgit Baltistan Tourism Support</h1>
                    <p class="mb-0">24/7 Visitor Assistance Services</p>
                </div>
            </div>
        </div>
    </header>

    <main class="container my-5">
        <h1 class="text-center mb-4" role="heading" aria-level="1">Tourist Helpline</h1>
        
        <!-- Emergency Contact Card -->
        <div class="card emergency-card mb-4">
            <div class="card-body">
                <h2 class="h4 card-title" role="heading" aria-level="2"><i class="bi bi-info-circle-fill text-warning me-2"></i>Visitor Support Contacts</h2>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="d-grid">
                            <a href="tel:05811930044" class="btn btn-warning btn-lg">
                                <i class="bi bi-telephone-outbound-fill"></i> Emergency Call: 05811930044
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-grid">
                            <a href="mailto:touristhelp@gbpolice.gov.pk" class="btn btn-outline-success btn-lg">
                                <i class="bi bi-envelope-paper-fill"></i> Email Assistance
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Section -->
        <section aria-label="Tourist services" class="mb-5">
            <h2 class="h4 mb-3" role="heading" aria-level="2"><i class="bi bi-passport me-2"></i>Visitor Services</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <i class="bi bi-clock-history service-icon text-primary"></i>
                            <h3 class="h6">24/7 Emergency Support</h3>
                            <p class="small">Immediate assistance for tourist emergencies</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <i class="bi bi-signpost-split service-icon text-success"></i>
                            <h3 class="h6">Travel Guidance</h3>
                            <p class="small">Route information & safety advisories</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <i class="bi bi-geo-alt service-icon text-danger"></i>
                            <h3 class="h6">Location Services</h3>
                            <p class="small">Help with lost belongings & navigation</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Travel Advisory Section -->
        <section aria-label="Travel advisories" class="mb-5">
            <h2 class="h4 mb-3" role="heading" aria-level="2"><i class="bi bi-exclamation-triangle-fill me-2"></i>Safety Guidelines</h2>
            <div class="alert alert-warning">
                <h3 class="h6">Important Travel Tips</h3>
                <ul class="mb-0">
                    <li>Register with local police for remote treks</li>
                    <li>Carry identification documents at all times</li>
                    <li>Check weather alerts before traveling</li>
                    <li>Use registered tour guides</li>
                </ul>
            </div>
        </section>

        <!-- Regional Offices Section -->
        <section aria-label="Regional offices" class="mb-5">
            <h2 class="h4 mb-3" role="heading" aria-level="2"><i class="bi bi-geo-fill me-2"></i>Regional Support Centers</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="h6">Skardu Office</h3>
                            <p class="mb-1">+92 05811 930045</p>
                            <p class="mb-0 text-muted small">Near K2 Museum, Skardu</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="h6">Hunza Office</h3>
                            <p class="mb-1">+92 05811 930046</p>
                            <p class="mb-0 text-muted small">Karimabad Main Bazaar</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="tourism-theme py-4 mt-5">
        <div class="container text-center small">
            <p class="mb-1">Gilgit Baltistan Tourism & Police Department</p>
            <p class="mb-0">24/7 Helpline: 05811930044 | Email: touristhelp@gbpolice.gov.pk</p>
            <p class="mt-2 mb-0">Operational in English, Urdu, and Local Languages</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>