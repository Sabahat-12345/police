@extends('layouts.app',['title' => 'Police Projects - Gilgit Baltistan Police'])
@section('main')
  <style>
       :root {
            --gbp-blue: #1a237e;
            --gbp-dark-blue: #0d47a1;
        } 

      
        .hero-header { background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://media.gettyimages.com/id/2144496146/photo/karachi-pakistan-pakistani-police-stands-outside-the-mosque-during-the-muslims-gather-to.jpg?s=612x612&w=0&k=20&c=oFCgNgfRZQSjamtRuBRt_aRxxeUrSPkVQpAsao4QxeM=') center/cover; }
        
        .project-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 15px;
        }
        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .icon-wrapper {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background-color: rgba(26, 35, 126, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

     
    </style>
    
<section>
    <!-- Hero Section -->
    <header class="hero-header text-white py-5">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">GB Police Initiatives</h1>
            <p class="lead mb-4">Building Safer Communities Through Innovation and Collaboration</p>
            <div class="badge bg-light text-dark fs-6">12 Active Projects</div>
        </div>
    </header>

    <!-- Projects Section -->
    <main class="container my-5">
        <div class="row g-4">
            <!-- Project 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="project-card card h-100 shadow">
                    <div class="card-body text-center p-4">
                        <div class="icon-wrapper">
                            <i class="fas fa-users fa-2x text-primary"></i>
                        </div>
                        <h3 class="card-title mb-3">Community Policing</h3>
                        <p class="card-text text-muted">Building trust through neighborhood engagement programs and citizen advisory boards.</p>
                        <div class="badge bg-success">Active</div>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="project-card card h-100 shadow">
                    <div class="card-body text-center p-4">
                        <div class="icon-wrapper">
                            <i class="fas fa-traffic-light fa-2x text-primary"></i>
                        </div>
                        <h3 class="card-title mb-3">Smart Traffic Management</h3>
                        <p class="card-text text-muted">Implementing intelligent traffic systems and driver education programs.</p>
                        <div class="badge bg-warning text-dark">Pilot Phase</div>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="project-card card h-100 shadow">
                    <div class="card-body text-center p-4">
                        <div class="icon-wrapper">
                            <i class="fas fa-shield-alt fa-2x text-primary"></i>
                        </div>
                        <h3 class="card-title mb-3">Women Protection</h3>
                        <p class="card-text text-muted">Specialized units and 24/7 helpline for gender-based violence prevention.</p>
                        <div class="badge bg-success">Active</div>
                    </div>
                </div>
            </div>

       
        </div>
    </main>

   </section>
    
@endsection

  

   