@extends('layouts.app',['title' => 'Employment Services - Gilgit Baltistan Police'])
@section('main')
    
    <style>
        .service-section {
            padding: 4rem 0;
            background-color: #f8f9fa;
        }
        .service-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 1.5rem;
        }
        .service-description {
            font-size: 1.1rem;
            color: #4a5568;
            line-height: 1.7;
            max-width: 800px;
            margin: 0 auto 2rem;
        }
        .btn-custom {
            background-color: #dc3545;
            color: white;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 8px;
            transition: all 0.3s ease;
            border: none;
        }
        .btn-custom:hover {
            background-color: #c82333;
            transform: translateY(-2px);
        }
        .card-body {
            border-left: 4px solid #dc3545;
            margin-top: 1.5rem;
        }
      
       
       
    </style>


<!-- Employment Services Section -->
<section class="service-section">
    <div class="container">
        <h1 class="service-title text-center">Employment Opportunities</h1>
        <p class="service-description text-center">
            The Gilgit Baltistan Police Department offers rewarding career opportunities for dedicated individuals 
            committed to public service and community safety. Explore various roles in law enforcement and 
            support services.
        </p>

        <div class="text-center">
            <button class="btn-custom" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#employmentDetails" aria-expanded="false" 
                    aria-controls="employmentDetails">
                View Available Positions
            </button>
        </div>

        <div class="collapse mt-4" id="employmentDetails">
            <div class="card card-body">
                <h3 class="h4 mb-3">Current Openings</h3>
                <ul class="mb-0">
                    <li>Police Constable (BPS-07)</li>
                    <li>Assistant Sub-Inspector (BPS-11)</li>
                    <li>Traffic Wardens</li>
                    <li>Forensic Specialists</li>
                    <li>IT Support Staff</li>
                    <li>Community Liaison Officers</li>
                </ul>
                <hr class="my-4">
                <div class="alert alert-info">
                    <strong>How to Apply:</strong> Visit our recruitment portal or contact the HR department at 
                    <a href="mailto:hr@gbpolice.gov.pk">hr@gbpolice.gov.pk</a> for application details.
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
   
