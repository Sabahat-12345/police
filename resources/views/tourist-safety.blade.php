<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tourist Safety Guidelines - Gilgit Baltistan Police</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --gb-blue: #0047AB;
            --gb-green: #006400;
        }
        .navbar { background-color: var(--gb-blue); }
        .card-header { background-color: var(--gb-green)!important; }
        .emergency-card { border-left: 5px solid #dc3545; }
        .guide-icon { font-size: 2rem; }
    </style>
</head>
<body class="bg-light">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('assets/police.png')}}" alt="GB Police Logo" height="50" class="d-inline-block align-text-top">
                Tourist Safety Portal
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{route('helpline')}}">Emergency</a></li>
                    <li class="nav-item"><a class="nav-link" href="#guidelines">Guidelines</a></li>
                   
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-5">
        <!-- Header Section -->
        <header class="text-center mb-5">
            <h1 class="display-4 fw-bold text-primary">Welcome to Gilgit Baltistan</h1>
            <p class="lead">Explore safely with our comprehensive safety guidelines</p>
        </header>

        <!-- Emergency Info Card -->
        <section id="emergency" class="card emergency-card mb-4 shadow">
            <div class="card-body">
                <h2 class="card-title"><i class="bi bi-telephone-forward"></i> Emergency Contacts</h2>
                <ul class="list-unstyled">
                    <li><strong>Police Emergency:</strong> 1122 / 058114-45022</li>
                    <li><strong>Tourist Helpline:</strong> 058114-45000</li>
                    <li><strong>Medical Emergency:</strong> 058114-44700</li>
                </ul>
            </div>
        </section>

        <!-- Safety Guidelines -->
        <section id="guidelines" class="row g-4">
            <div class="col-md-6">
                <div class="card h-100 shadow">
                    <div class="card-header text-white">
                        <h3><i class="bi bi-shield-check"></i> General Safety</h3>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">✔️ Always carry identification documents</li>
                            <li class="list-group-item">✔️ Use registered tour guides and companies</li>
                            <li class="list-group-item">✔️ Keep valuables in hotel safes</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 shadow">
                    <div class="card-header text-white">
                        <h3><i class="bi bi-globe"></i> Cultural Etiquette</h3>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">✔️ Dress modestly in public areas</li>
                            <li class="list-group-item">✔️ Ask permission before photographing locals</li>
                            <li class="list-group-item">✔️ Respect religious sites and traditions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Travel Advisory Section -->
        <section class="mt-5">
            <div class="alert alert-warning">
                <h4><i class="bi bi-exclamation-triangle"></i> Travel Advisory</h4>
                <p>Before visiting remote areas, register with local police and check weather conditions.</p>
                <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#registrationModal">
                    Register Your Itinerary
                </button>
            </div>
        </section>

        <!-- Registration Modal -->
        <div class="modal fade" id="registrationModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title"><i class="bi bi-clipboard-check"></i> Tourist Registration Form</h5>
                        <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form id="registrationForm" class="needs-validation" novalidate>
                            <!-- Personal Information -->
                            <fieldset class="mb-4">
                                <legend class="h6 text-primary">Personal Information</legend>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="fullName" class="form-label">Full Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="fullName" required placeholder="John Doe">
                                        <div class="invalid-feedback">Please enter your full name</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" required placeholder="john@example.com">
                                        <div class="invalid-feedback">Please enter a valid email</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control" id="phone" required placeholder="+92 300 1234567">
                                        <div class="invalid-feedback">Please enter your phone number</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nationality" class="form-label">Nationality <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="nationality" required placeholder="Pakistani">
                                        <div class="invalid-feedback">Please enter your nationality</div>
                                    </div>
                                </div>
                            </fieldset>
        
                            <!-- Travel Details -->
                            <fieldset class="mb-4">
                                <legend class="h6 text-primary">Travel Details</legend>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="arrivalDate" class="form-label">Arrival Date <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="arrivalDate" required>
                                        <div class="invalid-feedback">Please select arrival date</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="departureDate" class="form-label">Departure Date <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="departureDate" required>
                                        <div class="invalid-feedback">Please select departure date</div>
                                    </div>
                                    <div class="col-12">
                                        <label for="itinerary" class="form-label">Detailed Itinerary <span class="text-danger">*</span></label>
                                        <textarea class="form-control" id="itinerary" rows="3" required placeholder="Include locations you plan to visit, accommodation details, etc."></textarea>
                                        <div class="invalid-feedback">Please provide your travel itinerary</div>
                                    </div>
                                </div>
                            </fieldset>
        
                            <!-- Group Information -->
                            <fieldset class="mb-4">
                                <legend class="h6 text-primary">Group Information</legend>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="groupSize" class="form-label">Number of People <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="groupSize" min="1" required>
                                        <div class="invalid-feedback">Please enter group size</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="guide" class="form-label">Using Registered Guide?</label>
                                        <select class="form-select" id="guide">
                                            <option value="">Select option</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>
        
                            <!-- Emergency Contact -->
                            <fieldset class="mb-4">
                                <legend class="h6 text-primary">Emergency Contact</legend>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="emergencyName" class="form-label">Contact Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="emergencyName" required>
                                        <div class="invalid-feedback">Please enter emergency contact name</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="emergencyPhone" class="form-label">Contact Phone <span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control" id="emergencyPhone" required>
                                        <div class="invalid-feedback">Please enter emergency phone number</div>
                                    </div>
                                </div>
                            </fieldset>
        
                            <!-- Agreement -->
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="terms" required>
                                <label class="form-check-label" for="terms">
                                    I agree to the <a href="#" class="text-primary">Terms & Conditions</a> and confirm that the information provided is accurate
                                </label>
                                <div class="invalid-feedback">You must agree before submitting</div>
                            </div>
        
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit Registration</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>Gilgit Baltistan Police - Tourist Support Division</p>
            <p>24/7 Helpline: 05811-HELP (4357) | Email: tourism.gbpolice.gov.pk</p>
            <p>© 2023 All rights reserved</p>
        </div>
    </footer>
    
<!-- Add this script for form validation -->
<script>
    (function () {
      'use strict'
      const forms = document.querySelectorAll('.needs-validation')
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
    })()
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>