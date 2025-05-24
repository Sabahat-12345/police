@extends('layouts.app',['title' => 'National Security Division - GB Special Branch'])
@section('main')
   <style>
        .security-theme {
            background-color: #0A2342;
            color: white;
        }
        .intel-card {
            border-left: 5px solid #B20D30;
        }
        .security-icon {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        .encrypted-notice {
            border: 2px dashed #4CAF50;
            background: rgba(76, 175, 80, 0.1);
        }
    </style>
    <section>
    <main class="container my-5">
        <h1 class="text-center mb-4" role="heading" aria-level="1">National Security Operations</h1>
        
        <!-- Security Alert -->
        <div class="alert alert-danger mb-4">
            <i class="bi bi-exclamation-octagon-fill"></i> All information on this page is classified and protected under the National Security Act
        </div>

        <!-- Intelligence Grid -->
        <section aria-label="Security operations" class="mb-5">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <i class="bi bi-shield-lock security-icon text-primary"></i>
                            <h3 class="h6">Counter-Terrorism</h3>
                            <p class="small">Preemptive threat neutralization operations</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <i class="bi bi-globe security-icon text-success"></i>
                            <h3 class="h6">Border Security</h3>
                            <p class="small">Cross-border activity monitoring</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <i class="bi bi-file-earmark-break security-icon text-danger"></i>
                            <h3 class="h6">Cyber Intelligence</h3>
                            <p class="small">Digital threat detection & prevention</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Secure Reporting Section -->
        <div class="card intel-card">
            <div class="card-body">
                <h2 class="h4" role="heading" aria-level="2"><i class="bi bi-incognito"></i> Confidential Reporting</h2>
                
                <div class="encrypted-notice p-3 my-3">
                    <i class="bi bi-file-lock2"></i> All submissions are end-to-end encrypted
                </div>

                <form id="secureForm">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Incident Type</label>
                            <select class="form-select" required>
                                <option value="">Select threat category</option>
                                <option>Terrorist Activity</option>
                                <option>Espionage</option>
                                <option>Cyber Attack</option>
                                <option>Border Breach</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date of Observation</label>
                            <input type="date" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Detailed Information</label>
                            <textarea class="form-control" rows="4" placeholder="Provide specific details..." required></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Evidence Upload</label>
                            <input type="file" class="form-control" accept=".pdf,.jpg,.mp4" multiple>
                            <div class="form-text">Max 25MB (encrypted during transfer)</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Your Status</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="anon" checked>
                                <label class="form-check-label" for="anon">Anonymous Informant</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="identified">
                                <label class="form-check-label" for="identified">Identified Source</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-danger btn-lg">
                                    <i class="bi bi-shield-check"></i> Submit Secure Report
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Emergency Protocol -->
        <section aria-label="Emergency protocol" class="mt-5">
            <h2 class="h4 mb-3" role="heading" aria-level="2"><i class="bi bi-bell-fill"></i> Immediate Threat Protocol</h2>
            <div class="list-group">
                <a href="tel:1155" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    <span><i class="bi bi-telephone-outbound"></i> Priority Hotline: 1155</span>
                    <span class="badge bg-danger">24/7 Operational</span>
                </a>
                <a href="mailto:specialbranch@gbpolice.gov.pk" class="list-group-item list-group-item-action">
                    <i class="bi bi-envelope-check"></i> Encrypted Email Portal
                </a>
                <div class="list-group-item">
                    <i class="bi bi-geo-alt"></i> Secure Drop Locations Available
                </div>
            </div>
        </section>
    </main>
</section>

@endsection
 



  