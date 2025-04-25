<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collaborate with Gilgit Baltistan Police</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --gbp-blue: #1a237e;
            --gbp-red: #c62828;
        }
        .hero-section {
    background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://media.gettyimages.com/id/1246254917/photo/karachi-pakistan-pakistani-police-stand-guard-as-voters-arrive-at-a-polling-station-to-cast.jpg?s=612x612&w=0&k=20&c=4kuFf0qQGAW_bRXGcAfYDCcvIXkKz7lA7AoBDvnkSGU=');
    background-size: cover;
    height: 60vh;
}


        .collab-card {
            transition: transform 0.3s ease;
            border-left: 4px solid var(--gbp-blue);
        }

        .collab-card:hover {
            transform: translateY(-5px);
            border-left-color: var(--gbp-red);
        }

        .icon-box {
            width: 60px;
            height: 60px;
            background-color: rgba(26, 35, 126, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
         /* Top Navbar Styles */
         .navbar-custom {
            background-color: #3f2330;
            height: 80px;
            position: relative;
            overflow: visible;
            border: none !important;
        }

        .emergency-badge {
            font-size: 1.1rem;
            padding: 8px 20px;
            white-space: nowrap;
            color: white;
        }

        .red-square {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #dc3545;
            color: white !important;
            width: 40px;
            height: 40px;
            border-radius: 4px;
            margin-left: 8px;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .logo-container {
            position: absolute;
            left: 20px;
            top: 100%;
            transform: translateY(-50%);
            z-index: 1000;
        }

        .logo-img {
            height: 100px;
            transition: transform 0.3s;
        }

        .logo-img:hover {
            transform: scale(1.05);
        }

        /* Bottom Navbar Styles */
        .bottom-navbar {
            background-color: #F5F5DC;
        }

        .bottom-navbar .nav-link {
            color: #000 !important;
            padding: 0.5rem 1rem;
        }

        .bottom-navbar .dropdown-menu {
            background-color: #4f5d73;
            border: none;
        }

        .bottom-navbar .dropdown-item {
            color: white !important;
        }

        .bottom-navbar .dropdown-item:hover {
            background-color: #232b3f;
        }

        /* Hover Effects for Desktop */
        @media (min-width: 992px) {
            .bottom-navbar .nav-item:hover .nav-link {
                background-color: #232b3f;
                color: white !important;
            }

            .bottom-navbar .nav-item.dropdown:hover .dropdown-menu {
                display: block;
                margin-top: 0;
            }

            .bottom-navbar .navbar-nav {
                width: 100%;
                justify-content: center;
            }
        }

        /* Mobile Styles */
        @media (max-width: 991.98px) {
            .logo-container {
                left: 50%;
                transform: translateX(-50%) translateY(-50%);
            }

            .navbar-toggler {
                border-color: rgba(0,0,0,0.1);
            }

            .navbar-toggler-icon {
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 0.55)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            }

            .bottom-navbar .navbar-nav {
                padding: 10px 0;
            }

            .bottom-navbar .dropdown-menu {
                margin-left: 1rem;
                width: calc(100% - 2rem);
            }
        }
    </style>
</head>
<body>

  
    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
      <div class="container">
          <div class="d-flex justify-content-between w-100 align-items-center">
              <div class="logo-container">
                  <a class="navbar-brand p-0" href="{{route('home')}}">
                      <img src="{{asset('assets/police.png')}}" alt="Gilgit Baltistan Police" class="logo-img">
                  </a>
              </div>
              <div class="d-flex align-items-center ms-auto">
                  <span class="badge emergency-badge">
                      For Emergency Call: 
                      <span class="red-square">15</span>
                  </span>
              </div>
          </div>
      </div>
  </nav>

  <!-- Bottom Navigation Bar -->
  <nav class="navbar navbar-expand-lg bottom-navbar">
      <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav w-100 justify-content-between">
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('home')}}">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">About</a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{route('history')}}">History</a></li>
                          <li><a class="dropdown-item" href="{{route('inspector_police')}}">Inspector General of Police</a></li>
                          <li><a class="dropdown-item" href="{{route('organization')}}">Organization</a></li>
                          <li><a class="dropdown-item" href="{{route('martyrs')}}">Martyrs</a></li>
                      </ul>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Public Relations</a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{route('press_release')}}">Press Release</a></li>
                      </ul>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">IT Initiatives</a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{route('projects')}}">Projects</a></li>
                          <li><a class="dropdown-item" href="{{route('collaborate')}}">Collaborate</a></li>
                          <li><a class="dropdown-item" href="{{route('goal')}}">Goals</a></li>
                          <li><a class="dropdown-item" href="{{route('tourist-safety')}}">Tourist Safety</a></li>
                      </ul>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Public Services</a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{route('education')}}">Education and Training</a></li>
                          <li><a class="dropdown-item" href="{{route('public-safety')}}">Public Safety</a></li>
                          <li><a class="dropdown-item" href="{{route('employment-services')}}">Employment Services</a></li>
                      </ul>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Gallery</a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="gallery.html">Image Gallery</a></li>
                      </ul>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Notices</a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{route('tender')}}">Tenders</a></li>
                          <li><a class="dropdown-item" href="{{route('job')}}">Job Notices</a></li>
                      </ul>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Contact Us</a>
                      <ul class="dropdown-menu">
                          <li>
                              <a class="dropdown-item btn btn-primary text-white " href="{{route('complain')}}">Lodge Your Complaints</a>
                          </li>
                          <li><a class="dropdown-item" href="{{route('helpline')}}">Helplines</a></li>
                      </ul>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
    <!-- Navigation -->
    {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('assets/police.png')}}" alt="GB Police Logo" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{route('collaborate')}}">Collaborate</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('projects')}}">Projects</a></li>
               
                </ul>
            </div>
        </div>
    </nav> --}}

    <!-- Hero Section -->
    <section class="hero-section text-white d-flex align-items-center">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Join Hands for Safer Communities</h1>
            <p class="lead mb-4">Your partnership strengthens our commitment to public safety</p>
            <a href="#contact" class="btn btn-lg btn-primary">Become a Partner</a>
        </div>
    </section>

    <!-- Collaboration Opportunities -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="collab-card card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="icon-box mb-3">
                                <i class="fas fa-handshake fa-2x text-primary"></i>
                            </div>
                            <h3>Community Partnerships</h3>
                            <p class="text-muted">Develop joint initiatives for neighborhood safety and crime prevention</p>
                            <!-- <a href="#" class="btn btn-outline-primary">Learn More</a> -->
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="collab-card card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="icon-box mb-3">
                                <i class="fas fa-users fa-2x text-primary"></i>
                            </div>
                            <h3>Volunteer Programs</h3>
                            <p class="text-muted">Join our citizen patrols, community watch programs, or youth mentorship initiatives</p>
                            <!-- <a href="#" class="btn btn-outline-primary">Apply Now</a> -->
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="collab-card card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="icon-box mb-3">
                                <i class="fas fa-briefcase fa-2x text-primary"></i>
                            </div>
                            <h3>Corporate Alliances</h3>
                            <p class="text-muted">Partner through CSR initiatives, technology sharing, or infrastructure support</p>
                            <!-- <a href="#" class="btn btn-outline-primary">Explore Options</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-light py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4">
                    <h2 class="mb-4">Get in Touch</h2>
                    <div class="d-flex mb-3">
                        <i class="fas fa-envelope me-3 text-primary fa-lg"></i>
                        <div>
                            <h5>Email</h5>
                            <p class="mb-0">collaborate@gilgitpolice.org</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="fas fa-phone me-3 text-primary fa-lg"></i>
                        <div>
                            <h5>Phone</h5>
                            <p class="mb-0">+92 (05811) 920 411</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Email Address">
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                                </div>
                                <button class="btn btn-primary w-100">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
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

     <!-- Custom JavaScript for hover functionality -->
     <script>
      // Maintain hover functionality on desktop
      function handleHover() {
          if (window.innerWidth >= 992) {
              document.querySelectorAll('.nav-item.dropdown').forEach(item => {
                  item.addEventListener('mouseenter', () => {
                      item.querySelector('.dropdown-menu').classList.add('show');
                  });
                  item.addEventListener('mouseleave', () => {
                      item.querySelector('.dropdown-menu').classList.remove('show');
                  });
              });
          }
      }

      // Initialize on load
      handleHover();
      // Update on window resize
      window.addEventListener('resize', handleHover);
  </script>
</body>
</html>