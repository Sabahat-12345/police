@extends('layouts.app',['title' => 'Women & Child Protection - GB Police'])
@section('main')
 <style>
        .safety-theme {
            background-color: #4B0082;
            color: white;
        }
        .emergency-card {
            border-left: 5px solid #FF69B4;
        }
        .safety-icon {
            font-size: 1.75rem;
            margin-right: 1rem;
        }
        .panic-button {
            animation: pulse 1.5s infinite;
        }
        @keyframes pulse {
            0% { transform: scale(0.95); }
            70% { transform: scale(1); }
            100% { transform: scale(0.95); }
        }
    </style>


    <main class="container my-5">
        <h1 class="text-center mb-4" role="heading" aria-level="1">Women & Child Safety Initiative</h1>
        
        <!-- Emergency Section -->
        <div class="card emergency-card mb-4">
            <div class="card-body text-center">
                <h2 class="h4" role="heading" aria-level="2"><i class="bi bi-shield-exclamation"></i> Immediate Assistance</h2>
                <div class="row g-3 mt-3">
                    <div class="col-md-4">
                        <a href="tel:1091" class="btn btn-danger btn-lg w-100 panic-button">
                            <i class="bi bi-telephone-inbound"></i> Women Helpline: 1091
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="tel:1121" class="btn btn-warning btn-lg w-100">
                            <i class="bi bi-heart-pulse"></i> Child Helpline: 1121
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="mailto:safety@gbpolice.gov.pk" class="btn btn-dark btn-lg w-100">
                            <i class="bi bi-envelope-x"></i> Email Alert
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Safety Guidelines -->
        <section aria-label="Safety guidelines" class="mb-5">
            <div class="row g-4">
                <!-- Women Safety -->
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="h5" role="heading" aria-level="3"><i class="bi bi-person-heart safety-icon"></i> Women's Safety</h2>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <i class="bi bi-geo-alt-fill text-primary"></i>
                                    Share live location with trusted contacts
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-lightning-charge-fill text-warning"></i>
                                    Use verified women-only transport services
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-shield-lock-fill text-success"></i>
                                    Self-defense training programs available
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Child Safety -->
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="h5" role="heading" aria-level="3"><i class="bi bi-balloon-heart safety-icon"></i> Child Protection</h2>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <i class="bi bi-phone-vibrate-fill text-danger"></i>
                                    GPS tracking devices available free of cost
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-laptop-fill text-info"></i>
                                    Cyber safety workshops for parents
                                </li>
                                <li class="list-group-item">
                                    <i class="bi bi-person-raised-hand text-purple"></i>
                                    24/7 missing child response team
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Online Safety Section -->
        <section aria-label="Digital safety" class="mb-5">
            <h2 class="h4 mb-3" role="heading" aria-level="2"><i class="bi bi-shield-lock-fill me-2"></i>Digital Security</h2>
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="h6"><i class="bi bi-instagram"></i> Social Media Safety</h3>
                            <ul class="small mb-0">
                                <li>Disable location tagging</li>
                                <li>Review privacy settings</li>
                                <li>Avoid sharing personal info</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="h6"><i class="bi bi-phone-vibrate"></i> App Safety</h3>
                            <ul class="small mb-0">
                                <li>Use parental controls</li>
                                <li>Monitor screen time</li>
                                <li>Verify app permissions</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="h6"><i class="bi bi-exclamation-octagon"></i> Report Abuse</h3>
                            <p class="small mb-0">
                                Report online harassment:
                                <a href="mailto:cyber@gbpolice.gov.pk">cyber@gbpolice.gov.pk</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Safety Network Section -->
        <section aria-label="Safety network" class="mb-5">
            <h2 class="h4 mb-3" role="heading" aria-level="2"><i class="bi bi-diagram-3 me-2"></i>Safety Network</h2>
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-4 text-center">
                            <img src="{{asset('assets/safe-house.png')}}" alt="Safe locations" class="img-fluid" style="max-height: 150px;">
                        </div>
                        <div class="col-md-8">
                            <h3 class="h6">Designated Safe Spaces</h3>
                            <ul class="mb-0">
                                <li>All police stations</li>
                                <li>Government hospitals</li>
                                <li>Women-run businesses (marked with pink sticker)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

   
 
@endsection
   