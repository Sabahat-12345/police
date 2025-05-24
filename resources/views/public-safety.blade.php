@extends('layouts.app',['title' => 'Public Safety - Gilgit Baltistan Police'])
@section('main')
      <style>
        :root {
            --gb-blue: #0047AB;
            --gb-dark: #232b3f;
            --gb-red: #dc3545;
        }

        .hero-section {
            background: linear-gradient(rgba(35, 43, 63, 0.9), rgba(35, 43, 63, 0.9)),
                        url("{{asset('assets/safety-bg.jpg')}}") center/cover;
            color: white;
            padding: 100px 0;
        }

        .safety-card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .safety-card:hover {
            transform: translateY(-10px);
        }

        .safety-icon {
            font-size: 2.5rem;
            color: var(--gb-blue);
        }

        .alert-banner {
            border-left: 5px solid var(--gb-red);
            background-color: #ffe6e6;
        }

     
    </style>
 
<section>
    <!-- Hero Section -->
    <header class="hero-section text-center">
        <div class="container">
            <h1 class="display-3 fw-bold mb-3">Community Safety First</h1>
            <p class="lead">Protecting Gilgit-Baltistan through prevention, preparedness, and partnership</p>
        </div>
    </header>

    <main class="container my-5">
        <!-- Current Alerts -->
        <section class="alert alert-banner mb-5">
            <div class="d-flex align-items-center">
                <i class="bi bi-exclamation-triangle fs-3 me-3 text-danger"></i>
                <div>
                    <h5>Weather Alert: Heavy snowfall expected in upper regions</h5>
                    <p class="mb-0">Avoid non-essential travel in affected areas</p>
                </div>
            </div>
        </section>
<!-- Safety Initiatives -->
<section id="initiatives" class="mb-5">
    <h2 class="text-center mb-5 display-5 fw-bold">Safety Initiatives</h2>
    <div class="row g-4">
        <div class="col-md-6 col-lg-3">
            <div class="safety-card h-100 p-4 text-center">
                <i class="bi bi-house-door safety-icon mb-3"></i>
                <h5>Neighborhood Watch</h5>
                <p>Community-based crime prevention programs</p>
                <p class="text-muted small mt-2">Weekly community meetings and coordinated patrols with local police stations. Report suspicious activities through dedicated hotline.</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="safety-card h-100 p-4 text-center">
                <i class="bi bi-car-front safety-icon mb-3"></i>
                <h5>Road Safety</h5>
                <p>Traffic awareness campaigns and checkpoints</p>
                <p class="text-muted small mt-2">Enforcing helmet/seatbelt laws, mountain road safety audits, and driver education programs for commercial vehicles.</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="safety-card h-100 p-4 text-center">
                <i class="bi bi-cloud-snow safety-icon mb-3"></i>
                <h5>Winter Preparedness</h5>
                <p>Avalanche safety and cold weather advisories</p>
                <p class="text-muted small mt-2">Daily weather bulletins, emergency shelter locations, and winter survival training for high-altitude communities.</p>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="safety-card h-100 p-4 text-center">
                <i class="bi bi-shield-check safety-icon mb-3"></i>
                <h5>Tourist Safety</h5>
                <p>Visitor security and mountain rescue services</p>
                <p class="text-muted small mt-2">24/7 tourist police patrols, registered guide requirements, and emergency response teams at major trekking routes.</p>
            </div>
        </div>
    </div>
</section>

        <!-- Emergency Section -->
<section id="emergency" class="mb-5">
    <div class="row g-4">
        <div class="col-md-6">
            <div class="card h-100 border-primary">
                <div class="card-body text-center">
                    <h3><i class="bi bi-telephone-inbound"></i> Emergency Contacts</h3>
                    <ul class="list-unstyled">
                        <li>Police Emergency: 15</li>
                        <li>Mountain Rescue: 1122</li>
                        <li>Women Helpline: 1099</li>
                        <li>Child Protection: 1121</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100 border-danger">
                <div class="card-body">
                    <h3><i class="bi bi-exclamation-octagon"></i> Emergency Protocols</h3>
                    <div class="mt-3">
                        <h5>Immediate Response Guidelines:</h5>
                        <ul class="list-unstyled">
                            <li>✔️ Stay calm and assess the situation</li>
                            <li>✔️ Follow official evacuation routes</li>
                            <li>✔️ Assist children and elderly first</li>
                        </ul>
                    </div>
                    <div class="mt-3">
                        <h5>Disaster Preparedness:</h5>
                        <ul>
                            <li>Maintain emergency supplies for 72 hours</li>
                            <li>Know your nearest shelter location</li>
                            <li>Keep important documents waterproof</li>
                        </ul>
                    </div>
                    <div class="mt-3">
                        <h5>Post-Emergency Actions:</h5>
                        <p class="mb-0">Report damages to local authorities and register for relief assistance through verified channels.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    </main>

  

 </section>
@endsection
  
 