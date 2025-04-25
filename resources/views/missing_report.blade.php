<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Missing Persons Reporting - GB Police</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        .missing-theme {
            background-color: #FF6B35;
            color: white;
        }
        .report-card {
            border-left: 5px solid #004E89;
        }
        .timeline {
            position: relative;
            padding-left: 40px;
        }
        .timeline::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 0;
            height: 100%;
            width: 2px;
            background: #004E89;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header class="missing-theme py-3">
        <div class="container">
            <div class="d-flex align-items-center">
                <img src="{{asset('assets/police.png')}}" alt="Missing Persons Logo" style="height: 50px;" class="me-3">
                <div>
                    <h1 class="h4 mb-0">GB Missing Persons Unit</h1>
                    <p class="mb-0">24/7 Emergency Reporting System</p>
                </div>
            </div>
        </div>
    </header>

    <main class="container my-5">
        <h1 class="text-center mb-4" role="heading" aria-level="1">Missing Persons Report</h1>
        
        <!-- Emergency Reporting Section -->
        <div class="card report-card mb-4">
            <div class="card-body">
                <h2 class="h4" role="heading" aria-level="2"><i class="bi bi-exclamation-triangle-fill"></i> Immediate Reporting</h2>
                <div class="row g-3 mt-3">
                    <div class="col-md-6">
                        <div class="d-grid">
                            <a href="tel:1138" class="btn btn-danger btn-lg">
                                <i class="bi bi-telephone-inbound"></i> Emergency Call: 1138
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-grid">
                            <a href="mailto:missing@gbpolice.gov.pk" class="btn btn-outline-dark btn-lg">
                                <i class="bi bi-envelope-exclamation"></i> Email Report
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reporting Process -->
        <section aria-label="Reporting process" class="mb-5">
            <h2 class="h4 mb-3" role="heading" aria-level="2"><i class="bi bi-clipboard-checklist"></i> Reporting Process</h2>
            <div class="timeline">
                <div class="mb-4 position-relative">
                    <span class="badge bg-primary position-absolute start-0 translate-middle">1</span>
                    <h3 class="h6">Prepare Information</h3>
                    <ul>
                        <li>Recent photographs (face and full-body)</li>
                        <li>Last seen location and time</li>
                        <li>Physical description and clothing</li>
                    </ul>
                </div>
                
                <div class="mb-4 position-relative">
                    <span class="badge bg-primary position-absolute start-0 translate-middle">2</span>
                    <h3 class="h6">Immediate Actions</h3>
                    <ul>
                        <li>Contact nearest police station</li>
                        <li>Preserve personal belongings</li>
                        <li>Note any suspicious activities</li>
                    </ul>
                </div>

                <div class="mb-4 position-relative">
                    <span class="badge bg-primary position-absolute start-0 translate-middle">3</span>
                    <h3 class="h6">Follow-up Procedures</h3>
                    <ul>
                        <li>Regular updates from investigating officer</li>
                        <li>Media coordination if required</li>
                        <li>Forensic support available</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Quick Report Form -->
        <section aria-label="Quick report" class="mb-5">
            <h2 class="h4 mb-3" role="heading" aria-level="2"><i class="bi bi-file-earmark-medical"></i> Preliminary Report</h2>
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Missing Person's Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Last Seen Location</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Date/Time of Disappearance</label>
                                <input type="datetime-local" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Your Contact Number</label>
                                <input type="tel" class="form-control" required>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-send"></i> Submit Preliminary Report
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- Resources Section -->
        <!-- <section aria-label="Resources" class="mb-5">
            <h2 class="h4 mb-3" role="heading" aria-level="2"><i class="bi bi-info-circle"></i> Additional Resources</h2>
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="h6"><i class="bi bi-map"></i> Nearby Stations</h3>
                            <p class="small">Find the closest police station with our interactive map</p>
                            <a href="#" class="btn btn-sm btn-outline-secondary">View Map</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="h6"><i class="bi bi-file-pdf"></i> Download Forms</h3>
                            <p class="small">Official missing person report forms and affidavits</p>
                            <a href="#" class="btn btn-sm btn-outline-secondary">Download</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="h6"><i class="bi bi-people"></i> Support Groups</h3>
                            <p class="small">Connect with community support organizations</p>
                            <a href="#" class="btn btn-sm btn-outline-secondary">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    </main>

    <footer class="missing-theme py-4 mt-5">
        <div class="container text-center small">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h4 class="h6">Emergency Contacts</h4>
                    <p class="mb-0">Helpline: 1138</p>
                    <p class="mb-0">SMS Alert: 1139</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h4 class="h6">Quick Links</h4>
                    <p class="mb-0">National Database</p>
                    <p class="mb-0">Forensic Services</p>
                </div>
                <div class="col-md-4">
                    <h4 class="h6">Follow Updates</h4>
                    <p class="mb-0">Social Media Alerts</p>
                    <p class="mb-0">Email Notifications</p>
                </div>
            </div>
            <hr class="my-3">
            <p class="mb-0">© 2023 GB Missing Persons Unit. All reports treated with urgency.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>