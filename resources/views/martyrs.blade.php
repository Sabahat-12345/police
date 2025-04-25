<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Martyrs - Gilgit Baltistan Police</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --gb-blue: #0047AB;
            --gb-dark: #232b3f;
            --gb-gold: #FFD700;
        }

        .hero-section {
            background: linear-gradient(rgba(35, 43, 63, 0.8), rgba(35, 43, 63, 0.8)),
                        url("{{asset('assets/martyrs-banner.jpg')}}") center/cover;
            color: white;
            padding: 120px 0;
        }

        .martyr-card {
            transition: transform 0.3s ease;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .martyr-card:hover {
            transform: translateY(-10px);
        }

        .martyr-img {
            height: 300px;
            object-fit: cover;
            filter: grayscale(30%);
            transition: filter 0.3s ease;
        }

        .martyr-card:hover .martyr-img {
            filter: grayscale(0);
        }

        .badge-honor {
            background-color: var(--gb-gold);
            color: var(--gb-dark);
        }

        .timeline {
            border-left: 3px solid var(--gb-blue);
            padding-left: 2rem;
        }

        .modal-content {
            border-radius: 15px;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: var(--gb-dark);">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('assets/police.png')}}" alt="GB Police Logo" height="50">
                Martyrs Memorial
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#wall">Memorial Wall</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Timeline">Timeline</a></li>
                    <li class="nav-item"><a class="nav-link" href="#honors">Honors</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section text-center">
        <div class="container">
            <h1 class="display-3 fw-bold mb-3">Heroes in Eternal Watch</h1>
            <p class="lead">Honoring 243 brave officers who made the ultimate sacrifice</p>
            <div class="mt-4">
                <i class="bi bi-flag-fill fs-1"></i>
                <i class="bi bi-shield-fill-check fs-1 mx-4"></i>
                <i class="bi bi-star-fill fs-1"></i>
            </div>
        </div>
    </header>

    <main class="container my-5">
        <!-- Memorial Wall -->
        <section id="wall" class="row g-4 mb-5">
            <div class="col-12">
                <h2 class="text-center mb-5 display-5 fw-bold">Memorial Wall of Honor</h2>
            </div>
            
         <!-- Martyr Card 1 -->
<div class="col-md-4 mb-4">
    <div class="card martyr-card h-100" data-bs-toggle="modal" data-bs-target="#martyrModal">
        <img src="{{asset('assets/Shaheed Officer Ali Khan.jpg')}}" class="martyr-img" alt="Shaheed Officer Ali Khan">
        <div class="card-body text-center">
            <div class="badge badge-honor rounded-pill mb-2">Nishan-e-Haider</div>
            <h4 class="card-title">ASP Ali Khan</h4>
            <p class="text-muted">Sacrificed: 15 March 2022</p>
            <p class="card-text">"Bravery is not the absence of fear, but the triumph over it."</p>
        </div>
    </div>
</div>

<!-- Martyr Card 2 -->
<div class="col-md-4 mb-4">
    <div class="card martyr-card h-100" data-bs-toggle="modal" data-bs-target="#martyrModal2">
        
        <img src="{{asset('assets/Inspector Kamran Ahmed.jpg')}}" class="martyr-img" alt="Shaheed Inspector Kamran Ahmed">
        <div class="card-body text-center">
            <div class="badge badge-honor rounded-pill mb-2">Sitara-e-Jurat</div>
            <h4 class="card-title">Inspector Kamran Ahmed</h4>
            <p class="text-muted">Sacrificed: 2 September 2020</p>
            <p class="card-text">"A hero is someone who has given his life to something bigger than oneself."</p>
        </div>
    </div>
</div>

<!-- Martyr Card 3 -->
<div class="col-md-4 mb-4">
    <div class="card martyr-card h-100" data-bs-toggle="modal" data-bs-target="#martyrModal3">

        <img src="{{asset('assets/Shaheed Constable Farhan Hussain.jpg')}}" class="martyr-img" alt="Shaheed Constable Farhan Hussain">
        <div class="card-body text-center">
            <div class="badge badge-honor rounded-pill mb-2">Quaid-e-Azam Police Medal</div>
            <h4 class="card-title">Constable Farhan Hussain</h4>
            <p class="text-muted">Sacrificed: 14 August 2021</p>
            <p class="card-text">"The brave don't live forever, but the cautious don't live at all."</p>
        </div>
    </div>
    </div>
</div>



            
            
        </section>

        <!-- Sacrifice Timeline -->
        <section class="mb-5">
            <h3 id="Timeline" class="text-center mb-4 fw-bold">Timeline of Sacrifices</h3>
            <div class="timeline">
                <div class="ps-4 mb-4">
                    <h5>2023</h5>
                    <p>12 Heroes martyred in counter-terrorism operations</p>
                </div>
                <div class="ps-4 mb-4">
                    <h5>2020-2022</h5>
                    <p>38 Martyrs during border security operations</p>
                </div>
                <div class="ps-4 mb-4">
                    <h5>2018</h5>
                    <p>9 Brave officers fell in Ghizer Valley counter-insurgency</p>
                </div>
                <div class="ps-4 mb-4">
                    <h5>2015-2017</h5>
                    <p>27 Martyrs protecting tourist areas and critical infrastructure</p>
                </div>
                <!-- Add more timeline items -->
            </div>
        </section>

        <!-- Memorial Gallery -->
        <section id="honors" class="row g-4 mb-5">
            <div class="col-12">
                <h3 class="text-center mb-4 fw-bold">Honors & Recognition</h3>
            </div>
            <div class="col-md-3">
                <div class="card border-0 text-center">
                    <i class="bi bi-award fs-1 text-primary"></i>
                    <div class="card-body">
                        <h6>National Awards</h6>
                        <p class="small">23 Gallantry Awards</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 text-center">
                    <i class="bi bi-globe fs-1 text-success"></i>
                    <div class="card-body">
                        <h6>International Recognition</h6>
                        <p class="small">UN Peacekeeping Medal</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 text-center">
                    <i class="bi bi-shield-check fs-1 text-danger"></i>
                    <div class="card-body">
                        <h6>Protection Awards</h6>
                        <p class="small">5 Civilian Protection Honors</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 text-center">
                    <i class="bi bi-star fs-1 text-warning"></i>
                    <div class="card-body">
                        <h6>Community Service</h6>
                        <p class="small">12 Public Service Awards</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

   <!-- Martyr Modal 1 - Ali Khan -->
<div class="modal fade" id="martyrModal">
    
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Detailed Profile</h5>
                <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row g-4">
                    <!-- Left Column -->
                    <div class="col-md-5">
                        <div class="text-center">
                            <img src="{{asset('assets/Shaheed Officer Ali Khan.jpg')}}" class="img-fluid rounded-circle mb-3" alt="Shaheed Ali Khan" style="max-width: 200px;">
                            <h3 class="mb-0">ASP Muhammad Ali Khan</h3>
                            <p class="text-muted">PSP-1323</p>
                            <div class="d-flex justify-content-center gap-2 mb-3">
                                <span class="badge bg-primary">Nishan-e-Haider</span>
                                <span class="badge bg-danger">Sitara-e-Jurat</span>
                            </div>
                        </div>
            
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-person-badge"></i> Personal Details</h5>
                                <ul class="list-unstyled">
                                    <li><strong>Born:</strong> 15 August 1985</li>
                                    <li><strong>Hometown:</strong> Gilgit City</li>
                                    <li><strong>Education:</strong> MSC Criminology</li>
                                    <li><strong>Family:</strong> Wife + 2 Children</li>
                                </ul>
                            </div>
                        </div>
                    </div>
            
                    <!-- Right Column -->
                    <div class="col-md-7">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-shield-shaded"></i> Service History</h5>
                                <div class="timeline">
                                    <div class="ps-3 mb-3">
                                        <h6>2009</h6>
                                        <p>Joined Police Service of Pakistan</p>
                                    </div>
                                    <div class="ps-3 mb-3">
                                        <h6>2012-2015</h6>
                                        <p>ASP Operations - Skardu Division</p>
                                    </div>
                                    <div class="ps-3 mb-3">
                                        <h6>2018</h6>
                                        <p>Commander - Counter Terrorism Wing</p>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5><i class="bi bi-heartbreak"></i> Ultimate Sacrifice</h5>
                                        <ul class="list-unstyled">
                                            <li><strong>Date:</strong> 15 March 2022</li>
                                            <li><strong>Operation:</strong> Operation Zarb-e-Azb</li>
                                            <li><strong>Location:</strong> Diamer Sector</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5><i class="bi bi-award"></i> Honors</h5>
                                        <div class="d-flex flex-wrap gap-2">
                                            <span class="badge bg-warning text-dark">Gallantry Award</span>
                                            <span class="badge bg-success">Presidential Medal</span>
                                            <span class="badge bg-info">Police Star</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Additional Details -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5><i class="bi bi-file-text"></i> Operational Details</h5>
                                <p>Led 23 successful counter-terrorism operations, neutralized 47 terrorists, and rescued 12 hostages during his service. His final operation prevented a major terrorist attack on a civilian population.</p>
                                
                                <h5 class="mt-4"><i class="bi bi-quote"></i> Last Communication</h5>
                                <blockquote class="blockquote bg-light p-3 rounded">
                                    "Do not retreat, do not surrender. We stand between chaos and order. Hold the line!"
                                    <footer class="blockquote-footer mt-2">Final radio transmission</footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Family & Legacy -->
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5><i class="bi bi-people"></i> Family</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Spouse: Ayesha Khan</li>
                                    <li class="list-group-item">Children: Ahmed (12), Fatima (9)</li>
                                    <li class="list-group-item">Father: Col. (R) Aslam Khan</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5><i class="bi bi-building"></i> Legacy</h5>
                                <ul class="list-unstyled">
                                    <li>▶ Ali Khan Police Training Center</li>
                                    <li>▶ Annual Memorial Lecture Series</li>
                                    <li>▶ Scholarship Program for Martyrs' Children</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Gallery -->
                <div class="row mt-4">
                    <div class="col-12">
                        <!-- <h5><i class="bi bi-images"></i> Memorial Gallery</h5> -->
                        <!-- <div class="row g-2">
                            <div class="col-4">
                                <img src="images/memorial1.jpg" class="img-thumbnail" alt="Award ceremony">
                            </div>
                            <div class="col-4">
                                <img src="images/memorial2.jpg" class="img-thumbnail" alt="Service photo">
                            </div>
                            <div class="col-4">
                                <img src="images/memorial3.jpg" class="img-thumbnail" alt="Memorial plaque">
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">
                    <i class="bi bi-download"></i> Download Full Profile
                </button>
            </div>
        </div>
    </div>
</div>

<footer class="bg-dark text-white py-4">
    <div class="container text-center">
        <div class="row g-4">
            <div class="col-md-4">
                <h5>Contact Families</h5>
                <p>martyr.family@gbpolice.gov.pk</p>
            </div>
            <div class="col-md-4">
                <h5>Donate</h5>
                <a href="#" class="text-white">Support Martyrs' Families</a>
            </div>
            <div class="col-md-4">
                <h5>Follow</h5>
                <div class="d-flex justify-content-center gap-3">
                    <a href="#" class="text-white"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-twitter"></i></a>
                </div>
            </div>
        </div>
        <p class="mt-4 mb-0">&copy; 2023 Gilgit Baltistan Police Martyrs Memorial</p>
    </div>
</footer>

</div>

<!-- Martyr Modal 2 - Kamran Ahmed -->
<div class="modal fade" id="martyrModal2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Detailed Profile</h5>
                <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row g-4">
                    <!-- Left Column -->
                    <div class="col-md-5">
                        <div class="text-center">
                            <img src="{{asset('assets/Inspector Kamran Ahmed.jpg')}}" class="img-fluid rounded-circle mb-3" alt="Shaheed Kamran Ahmed" style="max-width: 200px;">
                            <h3 class="mb-0">Inspector Kamran Ahmed</h3>
                            <p class="text-muted">Service No: GB-4456</p>
                            <div class="d-flex justify-content-center gap-2 mb-3">
                                <span class="badge bg-danger">Sitara-e-Jurat</span>
                                <span class="badge bg-success">Police Medal</span>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-person-badge"></i> Personal Details</h5>
                                <ul class="list-unstyled">
                                    <li><strong>Born:</strong> 12 June 1988</li>
                                    <li><strong>Hometown:</strong> Skardu</li>
                                    <li><strong>Education:</strong> BA Political Science</li>
                                    <li><strong>Family:</strong> Parents + 3 Siblings</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-md-7">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-shield-shaded"></i> Service History</h5>
                                <div class="timeline">
                                    <div class="ps-3 mb-3">
                                        <h6>2010</h6>
                                        <p>Joined Gilgit Baltistan Police</p>
                                    </div>
                                    <div class="ps-3 mb-3">
                                        <h6>2014</h6>
                                        <p>Field Operations Unit Leader</p>
                                    </div>
                                    <div class="ps-3 mb-3">
                                        <h6>2019</h6>
                                        <p>Anti-Narcotics Squad Commander</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5><i class="bi bi-heartbreak"></i> Ultimate Sacrifice</h5>
                                        <ul class="list-unstyled">
                                            <li><strong>Date:</strong> 2 September 2020</li>
                                            <li><strong>Operation:</strong> Drug Cartel Bust</li>
                                            <li><strong>Location:</strong> Hunza Valley</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5><i class="bi bi-award"></i> Honors</h5>
                                        <div class="d-flex flex-wrap gap-2">
                                            <span class="badge bg-warning text-dark">Bravery Star</span>
                                            <span class="badge bg-info">Service Excellence</span>
                                            <span class="badge bg-primary">Community Shield</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Details -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5><i class="bi bi-file-text"></i> Operational Details</h5>
                                <p>Conducted 45 successful drug bust operations, seized narcotics worth 2.3 billion rupees, and trained 120 officers in counter-narcotics operations.</p>
                                
                                <h5 class="mt-4"><i class="bi bi-quote"></i> Last Communication</h5>
                                <blockquote class="blockquote bg-light p-3 rounded">
                                    "Our duty is to protect even when darkness surrounds us. Keep the light of justice burning!"
                                    <footer class="blockquote-footer mt-2">Final message to team</footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Family & Legacy -->
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5><i class="bi bi-people"></i> Family</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Father: Muhammad Ismail</li>
                                    <li class="list-group-item">Mother: Fatima Begum</li>
                                    <li class="list-group-item">Siblings: 2 brothers, 1 sister</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5><i class="bi bi-building"></i> Legacy</h5>
                                <ul class="list-unstyled">
                                    <li>▶ Kamran Ahmed Drug Rehabilitation Center</li>
                                    <li>▶ Annual Counter-Narcotics Conference</li>
                                    <li>▶ Youth Awareness Program</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">
                    <i class="bi bi-download"></i> Download Full Profile
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Martyr Modal 3 - Farhan Hussain -->
<div class="modal fade" id="martyrModal3">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Detailed Profile</h5>
                <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row g-4">
                    <!-- Left Column -->
                    <div class="col-md-5">
                        <div class="text-center">
                            <img src="{{asset('assets/Shaheed Constable Farhan Hussain.jpg')}}" class="img-fluid rounded-circle mb-3" alt="Shaheed Farhan Hussain" style="max-width: 200px;">
                            <h3 class="mb-0">Constable Farhan Hussain</h3>
                            <p class="text-muted">Service No: GB-6789</p>
                            <div class="d-flex justify-content-center gap-2 mb-3">
                                <span class="badge bg-warning text-dark">Quaid-e-Azam Medal</span>
                                <span class="badge bg-info">Bravery Award</span>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-person-badge"></i> Personal Details</h5>
                                <ul class="list-unstyled">
                                    <li><strong>Born:</strong> 5 May 1995</li>
                                    <li><strong>Hometown:</strong> Nagar</li>
                                    <li><strong>Education:</strong> FSc Pre-Engineering</li>
                                    <li><strong>Family:</strong> Parents + 2 Sisters</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-md-7">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-shield-shaded"></i> Service History</h5>
                                <div class="timeline">
                                    <div class="ps-3 mb-3">
                                        <h6>2017</h6>
                                        <p>Joined as Constable</p>
                                    </div>
                                    <div class="ps-3 mb-3">
                                        <h6>2019</h6>
                                        <p>Traffic Police Unit</p>
                                    </div>
                                    <div class="ps-3 mb-3">
                                        <h6>2021</h6>
                                        <p>Quick Response Team Member</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5><i class="bi bi-heartbreak"></i> Ultimate Sacrifice</h5>
                                        <ul class="list-unstyled">
                                            <li><strong>Date:</strong> 14 August 2021</li>
                                            <li><strong>Operation:</strong> Hostage Rescue</li>
                                            <li><strong>Location:</strong> Karakoram Highway</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5><i class="bi bi-award"></i> Honors</h5>
                                        <div class="d-flex flex-wrap gap-2">
                                            <span class="badge bg-success">Presidential Award</span>
                                            <span class="badge bg-primary">Star of Bravery</span>
                                            <span class="badge bg-danger">Gallantry Medal</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Details -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5><i class="bi bi-file-text"></i> Operational Details</h5>
                                <p>Saved 15 civilians during terrorist attack, neutralized 3 armed militants, and protected school children during evacuation.</p>
                                
                                <h5 class="mt-4"><i class="bi bi-quote"></i> Last Communication</h5>
                                <blockquote class="blockquote bg-light p-3 rounded">
                                    "Save the children first! I'll hold them back!"
                                    <footer class="blockquote-footer mt-2">Final words to team</footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Family & Legacy -->
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5><i class="bi bi-people"></i> Family</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Father: Hussain Ali</li>
                                    <li class="list-group-item">Mother: Sakina Bibi</li>
                                    <li class="list-group-item">Sisters: Ayesha &amp; Zainab</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5><i class="bi bi-building"></i> Legacy</h5>
                                <ul class="list-unstyled">
                                    <li>▶ Farhan Hussain School Safety Program</li>
                                    <li>▶ Annual Bravery Award for Constables</li>
                                    <li>▶ Traffic Safety Campaign</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">
                    <i class="bi bi-download"></i> Download Full Profile
                </button>
            </div>
        </div>
    </div>
</div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
