@extends('layouts.app',['title' => 'Helplines - Gilgit Baltistan Police'])
@section('main')
     <style>
        body {
            background-color: #f8f9fa;
        }
        .helpline-card {
            border-radius: 10px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }
        .helpline-card:hover {
            transform: scale(1.05);
        }
        .helpline-number {
            font-size: 1.5rem;
            font-weight: bold;
            color: #dc3545;
        }
    </style>
      
<section>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Emergency Helplines</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="helpline-card text-center">
                    <h4>Police Emergency</h4>
                    <p class="helpline-number">15</p>
                    <a href="tel:15" class="btn btn-danger">Call Now</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="helpline-card text-center">
                    <h4>Rescue Service</h4>
                    <p class="helpline-number">1122</p>
                    <a href="tel:1122" class="btn btn-danger">Call Now</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="helpline-card text-center">
                    <h4>Women & Child Protection</h4>
                    <p class="helpline-number">1332</p>
                    <a href="tel:1332" class="btn btn-danger">Call Now</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="helpline-card text-center">
                    <h4>Human Rights Helpline</h4>
                    <p class="helpline-number">1099</p>
                    <a href="tel:1099" class="btn btn-danger">Call Now</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="helpline-card text-center">
                    <h4>Cyber Crime (FIA)</h4>
                    <p class="helpline-number">1717</p>
                    <a href="tel:1717" class="btn btn-danger">Call Now</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="helpline-card text-center">
                    <h4>Health Helpline</h4>
                    <p class="helpline-number">1166</p>
                    <a href="tel:1166" class="btn btn-danger">Call Now</a>
                </div>
            </div>
        </div>
    </div>
    </section>

@endsection
 