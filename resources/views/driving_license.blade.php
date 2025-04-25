<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driving License Services - GB Transport</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        .transport-theme {
            background-color: #004AAD;
            color: white;
        }
        .license-card {
            border-left: 5px solid #FFC107;
        }
        .process-step {
            border: 2px solid #004AAD;
            border-radius: 10px;
            transition: transform 0.3s;
        }
        .process-step:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header class="transport-theme py-3">
        <div class="container">
            <div class="d-flex align-items-center">
                <img src="{{asset('assets/police.png')}}" alt="GB Transport Logo" style="height: 50px;" class="me-3">
                <div>
                    <h1 class="h4 mb-0">Gilgit Baltistan Transport Authority</h1>
                    <p class="mb-0">Driver Licensing Services</p>
                </div>
            </div>
        </div>
    </header>

    <main class="container my-5">
        <h1 class="text-center mb-4" role="heading" aria-level="1">Driving License Services</h1>
        
        <!-- Service Tabs -->
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-new-tab" data-bs-toggle="tab" data-bs-target="#nav-new" type="button" role="tab">
                    <i class="bi bi-file-earmark-plus"></i> New License
                </button>
                <button class="nav-link" id="nav-renewal-tab" data-bs-toggle="tab" data-bs-target="#nav-renewal" type="button" role="tab">
                    <i class="bi bi-arrow-repeat"></i> Renewal
                </button>
                <button class="nav-link" id="nav-status-tab" data-bs-toggle="tab" data-bs-target="#nav-status" type="button" role="tab">
                    <i class="bi bi-search"></i> Check Status
                </button>
            </div>
        </nav>

        <!-- Tab Content -->
        <div class="tab-content mt-4" id="nav-tabContent">
            <!-- New License Tab -->
            <div class="tab-pane fade show active" id="nav-new" role="tabpanel">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="process-step p-4">
                            <h3 class="h5"><i class="bi bi-1-circle-fill text-primary"></i> Application Process</h3>
                            <ol class="mt-3">
                                <li>Learner's Permit Application</li>
                                <li>Theoretical Test (Road Signs & Rules)</li>
                                <li>Vision Test</li>
                                <li>Road Driving Test</li>
                                <li>License Issuance</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="process-step p-4">
                            <h3 class="h5"><i class="bi bi-2-circle-fill text-success"></i> Required Documents</h3>
                            <ul class="mt-3">
                                <li>Original CNIC + 2 copies</li>
                                <li>Medical Fitness Certificate</li>
                                <li>2 Passport-size Photos</li>
                                <li>Blood Group Report</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Renewal Tab -->
            <div class="tab-pane fade" id="nav-renewal" role="tabpanel">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="h5"><i class="bi bi-clock-history"></i> Renewal Process</h3>
                                <ol class="mt-3">
                                    <li>Submit expired license</li>
                                    <li>CNIC verification</li>
                                    <li>Eye test renewal</li>
                                    <li>Pay renewal fees</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="h5"><i class="bi bi-cash-coin"></i> Fee Structure</h3>
                                <table class="table mt-3">
                                    <tr><td>Car License</td><td>Rs. 2000</td></tr>
                                    <tr><td>Motorcycle</td><td>Rs. 1000</td></tr>
                                    <tr><td>Commercial</td><td>Rs. 3000</td></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Status Check Tab -->
            <div class="tab-pane fade" id="nav-status" role="tabpanel">
                <div class="card">
                    <div class="card-body">
                        <h3 class="h5"><i class="bi bi-file-earmark-text"></i> Check Application Status</h3>
                        <form class="mt-3">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Application ID</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">CNIC Number</label>
                                    <input type="text" class="form-control" pattern="[0-9]{13}" required>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-search"></i> Check Status
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="card license-card mt-5">
            <div class="card-body">
                <h2 class="h4" role="heading" aria-level="2"><i class="bi bi-headset"></i> Support Services</h2>
                <div class="row g-3 mt-3">
                    <div class="col-md-4">
                        <div class="d-grid">
                            <a href="tel:1122" class="btn btn-primary">
                                <i class="bi bi-telephone"></i> Helpline: 1122
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-grid">
                            <a href="mailto:license@gbpolice.gov.pk" class="btn btn-success">
                                <i class="bi bi-envelope"></i> Email Support
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-grid">
                            <a href="https://www.google.com/maps/@35.9099206,74.3959495,14z?entry=ttu&g_ep=EgoyMDI1MDQwMS4wIKXMDSoASAFQAw%3D%3D" class="btn btn-warning">
                                <i class="bi bi-geo-alt"></i> Office Locator
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Resources Section -->
        <!-- <section aria-label="Resources" class="mt-5">
            <h2 class="h4 mb-3" role="heading" aria-level="2"><i class="bi bi-download"></i> Downloads</h2>
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="h6"><i class="bi bi-file-pdf"></i> Application Form</h3>
                            <a href="#" class="btn btn-sm btn-outline-secondary mt-2">Download PDF</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="h6"><i class="bi bi-book"></i> Traffic Rules</h3>
                            <a href="#" class="btn btn-sm btn-outline-secondary mt-2">View Handbook</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="h6"><i class="bi bi-question-circle"></i> FAQ</h3>
                            <a href="#" class="btn btn-sm btn-outline-secondary mt-2">View Questions</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    </main>

    <footer class="transport-theme py-4 mt-5">
        <div class="container text-center small">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h4 class="h6">Office Hours</h4>
                    <p class="mb-0">Mon-Fri: 8AM-6PM</p>
                    <p class="mb-0">Sat: 9AM-1PM</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h4 class="h6">Services</h4>
                    <p class="mb-0">License Renewal</p>
                    <p class="mb-0">Duplicate License</p>
                </div>
                <div class="col-md-4">
                    <h4 class="h6">Follow Us</h4>
                    <p class="mb-0">Facebook</p>
                    <p class="mb-0">Twitter</p>
                </div>
            </div>
            <hr class="my-3">
            <p class="mb-0">© 2023 GB Transport Authority. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>