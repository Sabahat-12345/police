@extends('layouts.app',['title' => 'Public Safety Guidelines - GB Police'])
@section('main')
     <style>
        .safety-theme {
            background-color: #C8102E;
            color: white;
        }
        .tip-card {
            border-left: 4px solid #FFC72C;
        }
        .safety-icon {
            font-size: 1.75rem;
            margin-right: 1rem;
        }
    </style>
    
<section>
    <main class="container my-5">
        <h1 class="text-center mb-4" role="heading" aria-level="1">Safety Guidelines</h1>
        
        <!-- Safety Tips Accordion -->
        <div class="accordion" id="safetyAccordion">
            <!-- General Safety -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#generalSafety">
                        <i class="bi bi-shield-check safety-icon"></i> General Safety Guidelines
                    </button>
                </h2>
                <div id="generalSafety" class="accordion-collapse collapse show" data-bs-parent="#safetyAccordion">
                    <div class="accordion-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="bi bi-eye-fill text-primary me-2"></i>
                                Always maintain situational awareness
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-moon-stars-fill text-secondary me-2"></i>
                                Avoid poorly lit areas after dark
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-telephone-plus-fill text-success me-2"></i>
                                Save emergency contacts in speed dial
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Tourist Safety -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#touristSafety">
                        <i class="bi bi-passport safety-icon"></i> Visitor Safety Measures
                    </button>
                </h2>
                <div id="touristSafety" class="accordion-collapse collapse" data-bs-parent="#safetyAccordion">
                    <div class="accordion-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h3 class="h6"><i class="bi bi-bag-check me-2"></i>Belongings Safety</h3>
                                        <ul class="small mb-0">
                                            <li>Use anti-theft bags</li>
                                            <li>Keep valuables in hotel safe</li>
                                            <li>Carry cash in multiple places</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h3 class="h6"><i class="bi bi-signpost-split me-2"></i>Travel Safety</h3>
                                        <ul class="small mb-0">
                                            <li>Verify transport licenses</li>
                                            <li>Share itinerary with hotel</li>
                                            <li>Check weather forecasts</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Emergency Contact Card -->
        <div class="card tip-card mt-5">
            <div class="card-body">
                <h2 class="h4" role="heading" aria-level="2"><i class="bi bi-exclamation-triangle-fill me-2"></i>Emergency Contacts</h2>
                <div class="row g-3 mt-3">
                    <div class="col-md-6">
                        <div class="d-grid">
                            <a href="tel:05811930033" class="btn btn-danger btn-lg">
                                <i class="bi bi-telephone-outbound-fill"></i> Police Emergency
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-grid">
                            <a href="mailto:safety@gbpolice.gov.pk" class="btn btn-outline-dark btn-lg">
                                <i class="bi bi-envelope-exclamation-fill"></i> Email Alert
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Safety Checklist -->
        <section aria-label="Safety checklist" class="mt-5">
            <h2 class="h4 mb-3" role="heading" aria-level="2"><i class="bi bi-clipboard-check me-2"></i>Safety Checklist</h2>
            <div class="card">
                <div class="card-body">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1">
                        <label class="form-check-label" for="check1">
                            Emergency contacts saved
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check2">
                        <label class="form-check-label" for="check2">
                            Shared location with trusted contact
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check3">
                        <label class="form-check-label" for="check3">
                            Verified transportation credentials
                        </label>
                    </div>
                </div>
            </div>
        </section>
    </main>

 </section>
@endsection
   
