@extends('layouts.app',['title' => 'Education & Training - Gilgit Baltistan Police'])
@section('main')
    <style>
   

        .hero-section {
            background: linear-gradient(rgba(35, 43, 63, 0.9), rgba(35, 43, 63, 0.9)),
                        url('{{asset('assets/training-bg.jpg')}}') center/cover;
            color: white;
            padding: 100px 0;
        }

        .training-card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .training-card:hover {
            transform: translateY(-10px);
        }

        .program-icon {
            font-size: 2.5rem;
            color: var(--gb-blue);
        }

        .accordion-button:not(.collapsed) {
            background-color: var(--gb-blue);
            color: white;
        }

    </style>
    
<section>
    <!-- Hero Section -->
    <header class="hero-section text-center">
        <div class="container">
            <h1 class="display-3 fw-bold mb-3">Professional Development Programs</h1>
            <p class="lead">Enhancing law enforcement capabilities through modern education and training</p>
        </div>
    </header>

    <main class="container my-5">
        <!-- Training Programs -->
        <section id="programs" class="mb-5">
            <h2 class="text-center mb-5 display-5 fw-bold">Our Training Programs</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="training-card h-100 p-4 text-center">
                        <i class="bi bi-shield-check program-icon mb-3"></i>
                        <h4>Basic Law Enforcement</h4>
                        <p class="text-muted">6-month foundational training for new recruits</p>
                        <ul class="list-unstyled text-start">
                            <li>✔️ Criminal Procedure Code</li>
                            <li>✔️ Field Operations</li>
                            <li>✔️ Weapons Training</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="training-card h-100 p-4 text-center">
                        <i class="bi bi-binoculars program-icon mb-3"></i>
                        <h4>Advanced Investigations</h4>
                        <p class="text-muted">Specialized courses for detectives</p>
                        <ul class="list-unstyled text-start">
                            <li>✔️ Forensic Science</li>
                            <li>✔️ Cyber Crime</li>
                            <li>✔️ Crime Scene Management</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="training-card h-100 p-4 text-center">
                        <i class="bi bi-people program-icon mb-3"></i>
                        <h4>Community Policing</h4>
                        <p class="text-muted">Public engagement strategies</p>
                        <ul class="list-unstyled text-start">
                            <li>✔️ Conflict Resolution</li>
                            <li>✔️ Cultural Sensitivity</li>
                            <li>✔️ Public Safety Workshops</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Admissions Section -->
        <section id="admissions" class="mb-5">
            <h2 class="text-center mb-4 display-5 fw-bold">Admission Process</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4><i class="bi bi-file-earmark-text"></i> Requirements</h4>
                            <ul>
                                <li>Minimum Intermediate education</li>
                                <li>Physical fitness certificate</li>
                                <li>Police department nomination</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4><i class="bi bi-calendar-check"></i> Upcoming Sessions</h4>
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action">
                                    Batch 45: 15 Jan 2024 - 15 Jun 2024
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    Advanced CID: 1 Mar 2024 - 30 May 2024
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      <!-- FAQ Section -->
<section class="mb-5">
    <h2 class="text-center mb-4 display-5 fw-bold">Frequently Asked Questions</h2>
    <div class="accordion" id="faqAccordion">
        <div class="accordion-item">
            <h3 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    What's the duration of basic training?
                </button>
            </h3>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    The basic law enforcement training program runs for 6 months with both theoretical and practical components.
                </div>
            </div>
        </div>

        <!-- New FAQ Item 1 -->
        <div class="accordion-item">
            <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                    Who is eligible for advanced courses?
                </button>
            </h3>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Advanced courses are available for serving officers with minimum 2 years of field experience. Prior approval from department head is required.
                </div>
            </div>
        </div>

        <!-- New FAQ Item 2 -->
        <div class="accordion-item">
            <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                    Is accommodation provided during training?
                </button>
            </h3>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Yes, we provide dormitory facilities for outstation participants. Meal plans and basic amenities are included in the training package.
                </div>
            </div>
        </div>

        <!-- New FAQ Item 3 -->
        <div class="accordion-item">
            <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                    What certification will I receive?
                </button>
            </h3>
            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Successful candidates receive accredited certificates recognized by the National Police Bureau. Specialized courses include additional international certifications where applicable.
                </div>
            </div>
        </div>
    </div>
</section>
    </main>
</section>

  

@endsection
    

