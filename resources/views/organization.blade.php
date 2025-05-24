@extends('layouts.app',['title' => 'Organization Structure - Gilgit Baltistan Police'])
@section('main')
       <style>
        :root {
            --gb-blue: #0047AB;
            --gb-dark: #232b3f;
            --gb-gold: #FFD700;
        }

     

        .org-card {
            border: none;
            border-radius: 10px;
            transition: all 0.3s ease;
            min-height: 250px;
        }

        .org-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .hierarchy-list {
            border-left: 3px solid var(--gb-blue);
            padding-left: 1.5rem;
        }

        .dept-icon {
            font-size: 2.5rem;
            color: var(--gb-blue);
        }
    </style>
    
  <section">

    <main class="container my-5">
        <!-- Header Section -->
        <header class="text-center mb-5">
            <h1 class="display-4 fw-bold text-dark">Organizational Structure</h1>
            <p class="lead">Strategic framework ensuring public safety and effective law enforcement</p>
        </header>

        <!-- Main Divisions -->
        <section class="row g-4 mb-5">
            <div class="col-md-6 col-lg-4">
                <div class="org-card bg-white p-4 text-center">
                    <i class="bi bi-building dept-icon mb-3"></i>
                    <h4>Police Headquarters</h4>
                    <p class="text-muted">Central command overseeing all operations and administration</p>
                    <div class="hierarchy-list text-start">
                        <p class="mb-1">✔️ IGP Secretariat</p>
                        <p class="mb-1">✔️ Administrative Wing</p>
                        <p class="mb-1">✔️ Finance Division</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="org-card bg-white p-4 text-center">
                    <i class="bi bi-shield-check dept-icon mb-3"></i>
                    <h4>Field Operations</h4>
                    <p class="text-muted">Frontline law enforcement and public safety operations</p>
                    <div class="hierarchy-list text-start">
                        <p class="mb-1">✔️ District Police Offices</p>
                        <p class="mb-1">✔️ Traffic Police</p>
                        <p class="mb-1">✔️ Quick Response Teams</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="org-card bg-white p-4 text-center">
                    <i class="bi bi-binoculars dept-icon mb-3"></i>
                    <h4>Specialized Units</h4>
                    <p class="text-muted">Specialized departments handling complex operations</p>
                    <div class="hierarchy-list text-start">
                        <p class="mb-1">✔️ Counter-Terrorism Wing</p>
                        <p class="mb-1">✔️ Cyber Crime Division</p>
                        <p class="mb-1">✔️ Criminal Investigation Department</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Organizational Chart -->
        <section class="mb-5">
            <h3 class="text-center mb-4 fw-bold">Command Hierarchy</h3>
            <div class="row g-3 justify-content-center">
                <div class="col-12 text-center">
                    <div class="bg-primary text-white p-3 rounded">
                        <h5 class="mb-0">Inspector General of Police</h5>
                        <small>Chief Executive</small>
                    </div>
                </div>
                
                <div class="col-md-4 text-center">
                    <div class="bg-white p-3 rounded shadow-sm">
                        <h6>Additional IGP</h6>
                        <small>Operations</small>
                    </div>
                </div>
                
                <div class="col-md-4 text-center">
                    <div class="bg-white p-3 rounded shadow-sm">
                        <h6>Additional IGP</h6>
                        <small>Administration</small>
                    </div>
                </div>

                <div class="col-12 text-center">
                    <i class="bi bi-arrow-down fs-4 text-muted"></i>
                </div>

                <div class="col-md-3">
                    <div class="bg-white p-2 rounded shadow-sm">
                        <h6 class="mb-0">DIGP Zones</h6>
                        <small>Regional Commands</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white p-2 rounded shadow-sm">
                        <h6 class="mb-0">SSP Operations</h6>
                        <small>Field Command</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white p-2 rounded shadow-sm">
                        <h6 class="mb-0">SSP Investigations</h6>
                        <small>CID Head</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white p-2 rounded shadow-sm">
                        <h6 class="mb-0">SSP Training</h6>
                        <small>Academy Head</small>
                    </div>
                </div>
            </div>
        </section>

        <!-- Support Units -->
        <section class="row g-4 mb-5">
            <div class="col-12">
                <h3 class="text-center mb-4 fw-bold">Support Departments</h3>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="bg-white p-3 rounded text-center">
                    <i class="bi bi-heart-pulse fs-4 text-primary"></i>
                    <h6>Medical Wing</h6>
                    <small>Police Health Services</small>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="bg-white p-3 rounded text-center">
                    <i class="bi bi-laptop fs-4 text-primary"></i>
                    <h6>IT Division</h6>
                    <small>Technical Support</small>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="bg-white p-3 rounded text-center">
                    <i class="bi bi-car-front fs-4 text-primary"></i>
                    <h6>Transport Pool</h6>
                    <small>Fleet Management</small>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="bg-white p-3 rounded text-center">
                    <i class="bi bi-book fs-4 text-primary"></i>
                    <h6>Training Academy</h6>
                    <small>Personnel Development</small>
                </div>
            </div>
        </section>
    </main>

   
</section>
@endsection
 
