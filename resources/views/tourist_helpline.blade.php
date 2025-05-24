@extends('layouts.app',['title' => 'Tourist Assistance - GB Police Helpline'])
@section('main')
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

   
@endsection
   