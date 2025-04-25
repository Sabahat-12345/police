<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Police Projects - Gilgit Baltistan Police</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
       :root {
            --gbp-blue: #1a237e;
            --gbp-dark-blue: #0d47a1;
        } 

        .navbar { background-color: var(--gbp-blue) !important; }
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

        footer { background-color: var(--gbp-dark-blue) !important; }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('assets/police.png')}}" alt="GB Police Logo" class="me-2">
                GB Police
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#projects">Projects</a></li>
                   
                </ul>
            </div>
        </div>
    </nav>

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

   
    
    <!-- Footer -->
    <footer>
        <!-- Upper Footer with gradient background -->
        <div
          style="background: linear-gradient(to right, #232b3f, #3a4b7a)"
          class="text-white"
        >
          <div class="container py-4">
            <div class="row">
              <!-- Logo and Brief Description -->
              <div class="col-lg-3 mb-4">
                <div class="d-flex align-items-center mb-3">
                  <img
                    src="{{asset('assets/police.png')}}"
                    alt="GB Police Logo"
                    style="height: 60px"
                  />
                  <div class="ms-3">
                    <h5 class="mb-0 fw-bold">Gilgit Baltistan</h5>
                    <h6 class="mb-0">Police Department</h6>
                  </div>
                </div>
                <p class="small mb-0">
                  Serving and protecting the citizens of Gilgit Baltistan with
                  honor, integrity and professionalism.
                </p>
              </div>
  
              <!-- Important Links -->
              <div class="col-lg-3 mb-4">
                <h6 class="fw-bold text-light mb-3">Important Links</h6>
                <ul class="list-unstyled">
                  <li class="mb-2">
                    <a href="{{route('complain')}}" class="text-light text-decoration-none small"
                      ><i class="fas fa-chevron-right me-1 small"></i> Online FIR
                      Registration</a
                    >
                  </li>
                  <li class="mb-2">
                    <a href="#" class="text-light text-decoration-none small"
                      ><i class="fas fa-chevron-right me-1 small"></i>
                      Verification Services</a
                    >
                  </li>
                  <li class="mb-2">
                    <a href="{{route('missing')}}" class="text-light text-decoration-none small"
                      ><i class="fas fa-chevron-right me-1 small"></i> Missing
                      Persons</a
                    >
                  </li>
                  <li class="mb-2">
                    <a href="#" class="text-light text-decoration-none small"
                      ><i class="fas fa-chevron-right me-1 small"></i> Police
                      Stations Directory</a
                    >
                  </li>
                  <li class="mb-2">
                    <a href="#" class="text-light text-decoration-none small"
                      ><i class="fas fa-chevron-right me-1 small"></i> Traffic
                      Management</a
                    >
                  </li>
                </ul>
              </div>
  
              <!-- Contact Information -->
              <div class="col-lg-3 mb-4">
                <h6 class="fw-bold text-light mb-3">Contact Information</h6>
                <ul class="list-unstyled">
                  <li class="d-flex mb-2">
                    <i class="fas fa-map-marker-alt mt-1 me-2 text-light"></i>
                    <span class="small"
                      >Police Headquarters, Jutial, Gilgit, GB</span
                    >
                  </li>
                  <li class="d-flex mb-2">
                    <i class="fas fa-phone mt-1 me-2 text-light"></i>
                    <span class="small"
                      >Emergency: <strong class="text-danger">15</strong></span
                    >
                  </li>
                  <li class="d-flex mb-2">
                    <i class="fas fa-phone-alt mt-1 me-2 text-light"></i>
                    <span class="small">Control Room: 05811-930033</span>
                  </li>
                  <li class="d-flex mb-2">
                    <i class="fas fa-envelope mt-1 me-2 text-light"></i>
                    <span class="small">info@gbpolice.gov.pk</span>
                  </li>
                  <li class="d-flex mb-2">
                    <i class="fas fa-globe mt-1 me-2 text-light"></i>
                    <span class="small">www.gbpolice.gov.pk</span>
                  </li>
                </ul>
              </div>
  
              <!-- Connect with Us -->
              <div class="col-lg-3 mb-4">
                <h6 class="fw-bold text-light mb-3">Connect with Us</h6>
                <div class="d-flex mb-3">
                  <a
                    href="#"
                    class="me-2 d-flex justify-content-center align-items-center"
                    style="
                      width: 36px;
                      height: 36px;
                      background-color: rgba(255, 255, 255, 0.1);
                      border-radius: 4px;
                    "
                  >
                    <i class="fab fa-facebook-f text-light"></i>
                  </a>
                  <a
                    href="#"
                    class="me-2 d-flex justify-content-center align-items-center"
                    style="
                      width: 36px;
                      height: 36px;
                      background-color: rgba(255, 255, 255, 0.1);
                      border-radius: 4px;
                    "
                  >
                    <i class="fab fa-twitter text-light"></i>
                  </a>
                  <a
                    href="#"
                    class="me-2 d-flex justify-content-center align-items-center"
                    style="
                      width: 36px;
                      height: 36px;
                      background-color: rgba(255, 255, 255, 0.1);
                      border-radius: 4px;
                    "
                  >
                    <i class="fab fa-instagram text-light"></i>
                  </a>
                  <a
                    href="#"
                    class="d-flex justify-content-center align-items-center"
                    style="
                      width: 36px;
                      height: 36px;
                      background-color: rgba(255, 255, 255, 0.1);
                      border-radius: 4px;
                    "
                  >
                    <i class="fab fa-youtube text-light"></i>
                  </a>
                </div>
                <div class="mt-4">
                  <h6 class="fw-bold text-light mb-2">Emergency Helpline</h6>
                  <div class="d-flex align-items-center">
                    <span
                      class="bg-danger text-white d-flex align-items-center justify-content-center fw-bold"
                      style="
                        width: 50px;
                        height: 50px;
                        border-radius: 6px;
                        font-size: 24px;
                      "
                      >15</span
                    >
                    <div class="ms-3 small">
                      <div>24/7 Police</div>
                      <div>Emergency Service</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Bottom Footer -->
        <div class="bg-dark py-3">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-6 text-center text-md-start">
                <span class="text-light small"
                  >© 2025 Gilgit Baltistan Police. All Rights Reserved.</span
                >
              </div>
              <div class="col-md-6 text-center text-md-end">
                <ul class="list-inline mb-0">
                  <li class="list-inline-item">
                    <a href="#" class="text-light text-decoration-none small"
                      >Privacy Policy</a
                    >
                  </li>
                  <li class="list-inline-item">
                    <span class="text-secondary mx-2">|</span>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="text-light text-decoration-none small"
                      >Terms of Use</a
                    >
                  </li>
                  <li class="list-inline-item">
                    <span class="text-secondary mx-2">|</span>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="text-light text-decoration-none small"
                      >Accessibility</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>