@extends('layouts.app',['title' => 'Inspector General of Police - Gilgit Baltistan Police'])
@section('main')
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
      
<section>
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

    
    </section>

@endsection
   

 