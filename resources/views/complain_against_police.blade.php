@extends('layouts.app',['title'=>'Police Accountability Report - GB Police'])
@section('main')
<style>
    .integrity-theme {
        background-color: #2C3E50;
        color: white;
    }
    .complaint-card {
        border-left: 5px solid #E74C3C;
    }
    .process-steps {
        counter-reset: step;
    }
    .process-step::before {
        counter-increment: step;
        content: counter(step);
        background: #E74C3C;
        color: white;
        border-radius: 50%;
        padding: 5px 10px;
        margin-right: 10px;
    }
</style>

<main class="container my-5">
    <h1 class="text-center mb-4" role="heading" aria-level="1">Officer Conduct Complaint</h1>
    
    <!-- Security Assurance -->
    <div class="alert alert-info">
        <i class="bi bi-shield-lock-fill"></i> Your submission is encrypted and protected by SSL security
    </div>

    <!-- Complaint Process -->
    <section aria-label="Complaint process" class="process-steps mb-5">
        <h2 class="h4 mb-3" role="heading" aria-level="2"><i class="bi bi-clipboard2-check"></i> Complaint Process</h2>
        <div class="card">
            <div class="card-body">
                <div class="process-step mb-3">Anonymous reporting option available</div>
                <div class="process-step mb-3">Initial review within 72 hours</div>
                <div class="process-step mb-3">Case officer assignment notification</div>
                <div class="process-step">Final resolution communication</div>
            </div>
        </div>
    </section>

    <!-- Complaint Form -->
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <section aria-label="Complaint form">
        <div class="card complaint-card">
            <div class="card-body">
                <form id="complaintForm" action="{{ route('complainAgainstPolice.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Section 1: Complainant Information -->
                    <fieldset class="mb-4">
                        <legend class="h5"><i class="bi bi-person-badge"></i> Your Information</legend>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Full Name <span class="text-muted">(optional)</span></label>
                                <input type="text" class="form-control" name="name">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Contact Method</label>
                                <select class="form-select" id="contact_method" name="contact_method" required>
                                    <option value=""disabled selected>Choose...</option>
                                    <option value="email">Email</option>
                                    <option value="phone">Phone</option>
                                    <option value="postal-mail">Postal Mail</option>
                                    <option value="no-contact">No Contact</option>
                                </select>
                                @error('contact_method')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </fieldset>

                    <!-- Section 2: Incident Details -->
                    <fieldset class="mb-4">
                        <legend class="h5"><i class="bi bi-journal-text"></i> Incident Details</legend>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Date of Incident</label>
                                <input type="date" class="form-control" name="incident_date" required>
                                @error('incident_date')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Location</label>
                                <input type="text" class="form-control" placeholder="Address or landmark" name="location" required>
                                @error('location')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">Officer Details (if known)</label>
                                <input type="text" class="form-control" placeholder="Name, badge number, or description" name="officer_details">
                                @error('officer_details')
                                    <div class="text-danger">{{ $message }}</div> 
                                    @enderror  
                            </div>
                            <div class="col-12">
                                <label class="form-label">Detailed Description</label>
                                <textarea class="form-control" rows="4" name="description" required></textarea>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </fieldset>

                    <!-- Section 3: Evidence Upload -->
                    <fieldset class="mb-4">
                        <legend class="h5"><i class="bi bi-file-earmark-arrow-up"></i> Supporting Evidence</legend>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Upload Files</label>
                                <input type="file" class="form-control" multiple accept=".pdf,.jpg,.mp4" name="evidence">
                                <div class="form-text">Max 25MB total (PDF, images, videos)</div>
                                @error('evidence')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Witness Information</label>
                                <textarea class="form-control" rows="3" placeholder="Names and contact details" name="witness_info"></textarea>
                                @error('witness_info')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </fieldset>

                    <!-- Confidentiality Agreement -->
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" name="info_confirm" required>
                        <label class="form-check-label">
                            I confirm that the information provided is accurate to the best of my knowledge
                        </label>
                        @error('info_confirm')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-danger btn-lg">
                            <i class="bi bi-send-check"></i> Submit Secure Complaint
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Alternative Reporting Methods -->
    <section aria-label="Alternative reporting" class="mt-5">
        <h2 class="h4 mb-3" role="heading" aria-level="2"><i class="bi bi-megaphone"></i> Other Reporting Options</h2>
        <div class="row g-3">
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="h6"><i class="bi bi-whatsapp"></i> WhatsApp Reporting</h3>
                        <p class="small">Send message to: +92 300 1234567</p>
                        <a href="https://wa.me/923001234567" class="btn btn-success btn-sm">
                            <i class="bi bi-whatsapp"></i> Start Chat
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="h6"><i class="bi bi-building"></i> In-Person Reporting</h3>
                        <p class="small">Visit any police station or ombudsman office</p>
                        <a href="https://www.google.com/maps/@35.9099206,74.3959495,14z?entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoASAFQAw%3D%3D" class="btn btn-primary btn-sm">
                            <i class="bi bi-geo-alt"></i> Find Nearest
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="h6"><i class="bi bi-shield-check"></i> Human Rights Commission</h3>
                        <p class="small">Contact independent oversight body</p>
                        <a href="tel:0800-12345" class="btn btn-warning btn-sm">
                            <i class="bi bi-telephone"></i> Call 0800-12345
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection

   
