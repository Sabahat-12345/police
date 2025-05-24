@extends('layouts.app',['title' => 'Officer Profile - Mr. Afzal Mehmood Butt'])
@section('main')
 <style>
        .profile-section {
            background-color: #f8f9fa;
            padding: 3rem 0;
        }
        .profile-img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border: 4px solid #fff;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        .badge-custom {
            background-color: #dc3545;
            font-size: 1rem;
            vertical-align: middle;
        }
        .timeline {
            position: relative;
            padding-left: 40px;
            margin: 2rem 0;
        }
        .timeline::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 0;
            height: 100%;
            width: 2px;
            background: #dee2e6;
        }
        .timeline-item {
            position: relative;
            margin-bottom: 2rem;
        }
        .timeline-icon {
            position: absolute;
            left: -40px;
            top: 5px;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #dc3545;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
    </style>

<section class="profile-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <img src="{{asset('assets/igp.jpg')}}" alt="Mr. Afzal Mehmood Butt - DIGP" 
                                 class="profile-img rounded-circle mb-3">
                            <h1 class="h2 fw-bold mb-2">
                                Mr. Afzal Mehmood Butt
                                <span class="badge badge-custom ms-2">DIGP</span>
                            </h1>
                            <p class="text-muted mb-4">Deputy Inspector General of Police - GB Reserves/Rangers</p>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-info-circle me-2"></i>Quick Facts</h5>
                                        <ul class="list-unstyled">
                                            <li class="mb-2">
                                                <strong>Service Start:</strong> 2003
                                            </li>
                                            <li class="mb-2">
                                                <strong>Education:</strong> MPA, Virtual University
                                            </li>
                                            <li class="mb-2">
                                                <strong>Specialization:</strong> Peacekeeping Operations
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <h4 class="mb-3"><i class="fas fa-briefcase me-2"></i>Professional Journey</h4>
                                
                                <div class="timeline">
                                    <div class="timeline-item">
                                        <div class="timeline-icon">
                                            <i class="fas fa-flag"></i>
                                        </div>
                                        <h5>UN Peacekeeping Mission Appointment (2023)</h5>
                                        <p class="text-muted">
                                            Selected as FPU Coordinator for UN Mission in Darfur through competitive international recruitment process.
                                        </p>
                                    </div>

                                    <div class="timeline-item">
                                        <div class="timeline-icon">
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h5>Current Position (2015-Present)</h5>
                                        <p class="text-muted">
                                            Serving as Deputy Inspector General of GB Reserves/Rangers Police, overseeing strategic operations and personnel management.
                                        </p>
                                    </div>

                                    <div class="timeline-item">
                                        <div class="timeline-icon">
                                            <i class="fas fa-globe"></i>
                                        </div>
                                        <h5>UN Mission in Liberia (2012-2013)</h5>
                                        <p class="text-muted">
                                            Awarded UN Police Medal for exceptional service in international peacekeeping operations.
                                        </p>
                                    </div>
                                </div>

                                <h4 class="mt-5 mb-3"><i class="fas fa-award me-2"></i>Key Achievements</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        Led successful counter-terrorism operations in Northern regions
                                    </li>
                                    <li class="list-group-item">
                                        Implemented community policing initiatives improving public trust by 40%
                                    </li>
                                    <li class="list-group-item">
                                        Developed training programs adopted by national police academy
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection
   