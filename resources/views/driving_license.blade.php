@extends('layouts.app',['title'=>'Driving License Services - GB Transport'])
@section('main')
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
                    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session()->has('status'))
    @if(session('status') == 1)
        <p class="alert alert-success">Your application has been approved</p>
    @elseif(session('status') == 0)
        <p class="alert alert-info">Your application is under processing</p>
    @endif
@endif

@if (session('error1'))
    <div class="alert alert-danger">
        {{ session('error1') }}
    </div>
@endif
                    <form class="mt-3" method="post" action="{{ route('status.check') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Application ID</label>
                                <input type="text"  name="application_id"  class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">CNIC Number</label>
                                <input type="text" class="form-control" name="cnic" required>
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

 
</main>

@endsection
  

 

   
