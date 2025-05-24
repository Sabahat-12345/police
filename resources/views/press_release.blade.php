@extends('layouts.app',['title' => 'Press Release - Gilgit Baltistan Police'])
@section('main')
 <style>
        :root {
            --gb-blue: #0047AB;
            --gb-dark: #232b3f;
            --gb-light: #f8f9fa;
        }
        
      
        
     
        
        .press-release-card {
            background: white;
            border: none;
            border-radius: 10px;
            transition: transform 0.3s ease;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }
        
        .press-release-card:hover {
            transform: translateY(-5px);
        }
        
        .press-release-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--gb-dark);
            border-left: 4px solid var(--gb-blue);
            padding-left: 1rem;
        }
        
        .press-release-date {
            font-size: 0.9rem;
            color: #6c757d;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .badge-custom {
            background-color: var(--gb-blue);
            color: white;
            font-weight: 500;
        }
        
        .download-btn {
            border-color: var(--gb-blue);
            color: var(--gb-blue);
        }
        
        .download-btn:hover {
            background-color: var(--gb-blue);
            color: white;
        }
    </style>
    
<section>
    <main class="container my-5">
        <h1 class="text-center mb-5 display-4 fw-bold text-dark">Official Press Releases</h1>
        
        <!-- Press Release 1 -->
        <article class="press-release-card mb-4 p-4">
            <div class="d-flex justify-content-between align-items-start mb-3">
                <div>
                    <span class="badge badge-custom rounded-pill mb-2">Security Update</span>
                    <h2 class="press-release-title">New Public Safety Initiative Launched</h2>
                </div>
                <p class="press-release-date">
                    <i class="bi bi-calendar-event"></i> March 24, 2025
                </p>
            </div>
            <p class="text-secondary mb-4">The Gilgit Baltistan Police has announced a comprehensive public safety initiative aimed at enhancing security measures across the region. Key features include:</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item">✅ Increased police patrolling in tourist areas</li>
                <li class="list-group-item">✅ Enhanced emergency response systems</li>
                <li class="list-group-item">✅ Community safety awareness programs</li>
            </ul>
            <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">Issued by: Public Relations Office</small>
                <button class="btn download-btn">
                    <i class="bi bi-download"></i> Download PDF
                </button>
            </div>
        </article>

        <!-- Press Release 2 -->
        <article class="press-release-card mb-4 p-4">
            <div class="d-flex justify-content-between align-items-start mb-3">
                <div>
                    <span class="badge badge-custom rounded-pill mb-2">Criminal Justice</span>
                    <h2 class="press-release-title">Major Organized Crime Network Dismantled</h2>
                </div>
                <p class="press-release-date">
                    <i class="bi bi-calendar-event"></i> March 20, 2025
                </p>
            </div>
            <p class="text-secondary mb-4">In a coordinated operation spanning multiple districts, GB Police has successfully disrupted a major criminal network. Operation highlights include:</p>
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="alert alert-success h-100">
                        <h5 class="alert-heading">15 Arrests Made</h5>
                        Including key organization leaders
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="alert alert-info h-100">
                        <h5 class="alert-heading">Evidence Collected</h5>
                        Digital devices & financial records seized
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="alert alert-warning h-100">
                        <h5 class="alert-heading">Ongoing Investigation</h5>
                        Further details to be released
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">Issued by: Criminal Investigation Department</small>
                <button class="btn download-btn">
                    <i class="bi bi-download"></i> Download PDF
                </button>
            </div>
        </article>
    </main>
</section>

 
@endsection
   

 