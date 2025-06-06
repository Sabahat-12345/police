@extends('layouts.app',['title'=>'Gilgit Baltistan Police'])
@section('main')
   <style>
      
/* slider */
        .carousel-inner {
            height: 600px;
        }

        .carousel-item img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        /* Make carousel height responsive on smaller screens */
        @media (max-width: 1100px) {
            .carousel-inner {
                height: 400px
            }
        }

        @media (max-width: 480px) {
            .carousel-inner {
                height: 300px;
            }
        }
        @media (max-width: 768px) {
            .carousel-inner {
                height: 300px;
            }
        }

        @media (max-width: 480px) {
            .carousel-inner {
                height: 200px;
            }
        }

        /* Hide navigation arrows */
        .carousel-control-prev,
        .carousel-control-next {
            display: none !important;
        }
      /* services */
      /* Minimal CSS for hover effect */
      .nav-card {
        transition: all 0.3s ease;
      }
      .nav-card:hover {
        transform: translateY(-10px) scale(1.03);
        box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.3) !important;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      }

      /* IGP vision */
      .main-container {
        background: linear-gradient(to right, #e66465, #9198e5);
        color: white;
        min-height: 50vh;
        padding-top: 20px;
        margin-top: 50px;
      }
      .vision-card {
        background: rgba(0, 0, 0, 0.5);
        padding: 20px;
        border-radius: 10px;
      }
      img {
        border-radius: 10px;
      }
      /* Quick Links */
      .card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease-in-out;
        height: 100%; /* Ensures all cards are the same height */
      }
      .card:hover {
        transform: scale(1.05);
      }
      .card img {
        height: 180px; /* Ensures all images are the same height */
        object-fit: cover;
      }
      .card-body {
        min-height: 180px; /* Ensures all card bodies have the same height */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }
      .card-title {
        font-weight: bold;
        color: #2c2c6c;
      }
      .btn-primary {
        background-color: #2c2c6c;
        border: none;
      }
      .btn-primary:hover {
        background-color: #1a1a4a;
      }
          
 /* News And Events  */
 .news-card img {
            width: 100%;
            height: auto;
        }
        .latest-news{
          height: auto !important;
        }
    </style>
     

<!-- Auto Carousel Slider -->
<div id="autoSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">

  <!-- Indicators -->
  <div class="carousel-indicators">
    @forelse($sliders as $index => $slider)
      <button type="button"
              data-bs-target="#autoSlider"
              data-bs-slide-to="{{ $index }}"
              class="{{ $index === 0 ? 'active' : '' }}"
              aria-current="{{ $index === 0 ? 'true' : 'false' }}"
              aria-label="Slide {{ $index + 1 }}"></button>
    @empty
      @for ($i = 0; $i < 3; $i++)
        <button type="button"
                data-bs-target="#autoSlider"
                data-bs-slide-to="{{ $i }}"
                class="{{ $i === 0 ? 'active' : '' }}"
                aria-current="{{ $i === 0 ? 'true' : 'false' }}"
                aria-label="Default Slide {{ $i + 1 }}"></button>
      @endfor
    @endforelse
  </div>

  <!-- Slides -->
  <div class="carousel-inner">
    @forelse($sliders as $index => $slider)
      <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
        <img src="{{ asset($slider->image) }}"
             class="d-block w-100 img-fluid"
             alt="Slide {{ $index + 1 }}"
             loading="lazy">
      </div>
    @empty
      <div class="carousel-item active">
        <img src="{{ asset('assets/slider1.jpg') }}" class="d-block w-100" alt="Slide 1">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('assets/slider2.png') }}" class="d-block w-100" alt="Slide 2">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('assets/slider3.jpg') }}" class="d-block w-100" alt="Slide 3">
      </div>
    @endforelse
  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#autoSlider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#autoSlider" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

</div>




  
    <!-- services -->
    <!-- Main Menu -->

    <div class="container mt-5">
      <div class="row g-4">
        <!-- Police Helpline -->
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card nav-card h-100 border-0 bg-primary bg-opacity-10">
            <div class="card-body text-center">
              <i class="fas fa-police-car fs-1 text-primary mb-3"></i>
              <h5 class="text-dark">Police Control Room</h5>
              <div class="mt-2">
                <a
                  href="tel:05811930033"
                  class="text-decoration-none text-dark"
                >
                  <div
                    class="d-flex align-items-center justify-content-center gap-2"
                  >
                    <i class="fas fa-phone-volume text-primary"></i>
                    <span>05811930033</span>
                  </div>
                </a>
              </div>
              <!-- NEW Anchor Tag -->
              <div class="mt-3">
                <a
                  href="{{route('police_control_room')}}"
                  class="text-decoration-none text-primary"
                  target="_blank"
                >
                  <i class="fas fa-headset"></i> View Police Control Room
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Tourist Helpline -->
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card nav-card h-100 border-0 bg-info bg-opacity-10">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt fs-1 text-info mb-3"></i>
              <h5 class="text-dark">Tourist Helpline</h5>
              <!-- Website Link -->
              <div class="mt-3">
                <a
                  href="{{route('tourist_helpline')}}"
                  class="text-decoration-none text-info"
                  target="_blank"
                >
                  <i class="fas fa-globe"></i> Visit Tourism Website
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Safety Tips -->
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card nav-card h-100 border-0 bg-success bg-opacity-10">
            <div class="card-body text-center">
              <i class="fas fa-shield-alt fs-1 text-success mb-3"></i>
              <h5 class="text-dark">Safety Tips</h5>
              <!-- Link to Safety Tips -->
              <div class="mt-3">
                <a
                  href="{{route('safety_tips')}}"
                  class="text-decoration-none text-success"
                  target="_blank"
                >
                  <i class="fas fa-book-open"></i> View Safety Guide
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Women and Child Safety -->
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card nav-card h-100 border-0 bg-danger bg-opacity-10">
            <div class="card-body text-center">
              <i class="fas fa-female fs-1 text-danger mb-3"></i>
              <h5 class="text-dark">Women and Child Safety</h5>
              <!-- Link to Women and Child Safety -->
              <div class="mt-3">
                <a
                  href="{{route('women_child_safety')}}"
                  class="text-decoration-none text-danger"
                  target="_blank"
                >
                  <i class="fas fa-hand-holding-heart"></i>Get Women's & Child
                  Safety Info
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Missing Report -->
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card nav-card h-100 border-0 bg-warning bg-opacity-10">
            <div class="card-body text-center">
              <i class="fas fa-search-location fs-1 text-warning mb-3"></i>
              <h5 class="text-dark">Missing Report</h5>
              <!-- Link to Missing Report Form -->
              <div class="mt-3">
                <a
                  href="{{route('missing')}}"
                  class="text-decoration-none text-warning"
                  target="_blank"
                >
                  <i class="fas fa-search-location"></i> Report Missing Person
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Driving License -->
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card nav-card h-100 border-0 bg-secondary bg-opacity-10">
            <div class="card-body text-center">
              <i class="fas fa-id-card fs-1 text-secondary mb-3"></i>
              <h5 class="text-dark">Driving License</h5>
              <!-- Link to Driving License Application Form or Webpage -->
              <div class="mt-3">
                <a
                  href="{{route('driving_license')}}"
                  class="text-decoration-none text-secondary"
                  target="_blank"
                >
                  <i class="fas fa-id-card-alt"></i> Renew Your Driving License
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Complain Against Police -->
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card nav-card h-100 border-0 bg-dark bg-opacity-10">
            <div class="card-body text-center">
              <i class="fas fa-gavel fs-1 text-dark mb-3"></i>
              <h5 class="text-dark">Complain Against Police</h5>
              <!-- Link to Complain Form or Webpage -->
              <div class="mt-3">
                <a
                  href="{{route('complain_against_police')}}"
                  class="text-decoration-none text-dark"
                  target="_blank"
                >
                  <i class="fas fa-balance-scale"></i>Submit Your Complaint
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Special Branch -->
        <div class="col-12 col-md-6 col-lg-3">
          <div
            class="card nav-card h-100 border-0"
            style="background-color: rgba(255, 215, 0, 0.1)"
          >
            <div class="card-body text-center">
              <i class="fas fa-user-secret fs-1" style="color: #ffd700"></i>
              <h5 class="text-dark">Special Branch</h5>
              <!-- Link to Special Branch Page or Webpage -->
              <div class="mt-3">
                <a
                  href="{{route('special_branch')}}"
                  class="text-decoration-none text-dark"
                  target="_blank"
                >
                  <i class="fas fa-info-circle"></i> View Details
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Igp Vision -->
    <div class="main-container">
      <div class="container py-5">
        <div class="row align-items-center">
          <div class="col-md-4 text-center">
            <img src="{{asset('assets/igp.jpg')}}" alt="IGP GB" class="img-fluid" />
            <h5 class="mt-3">
              Mr. Afzal Mehmood Butt (PSP)<br />Inspector General of Police, GB
            </h5>
          </div>
          <div class="col-md-8">
            <div class="vision-card">
              <h2 class="text-danger fw-bold">
                Vision By IGP GB Mr. Afzal Mehmood Butt, PSP
              </h2>
              <p>
                Prevention of crime, maintenance of law and orders, and
                redressal of public grievances is the foremost priority of
                Police. Police must ensure that the registration of FIR is swift
                and hassle-free. Negligence, carelessness, and unempathetic
                behavior will not be tolerated at any cost.
              </p>
              <p>
                In order to control crime, supervisory officers should formulate
                a comprehensive anti-crime strategy. Active measures such as
                improved patrolling and snap checking, covering hotspots of
                crime (motorcycle theft/snatching), must be taken. Police should
                map and analyze the crime pattern of motorcycle theft/snatching
                and house robberies and identify professional criminals involved
                in such crimes. Installation of CCTV cameras across cities
                should be encouraged. The same may be geo-tagged on Google Maps
                and, if possible, integrated into the police surveillance
                network.
              </p>
              <p>
                Supervisory officers should pay special attention to improving
                investigations. Investigations should cover all legal
                prerequisites.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- News And Events -->
     <div class="container mt-5 ">
      <h2 class="text-center">Latest News & Events</h2>
      <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner latest-news">
              <div class="carousel-item active">
                  <div class="row">
                      <div class="col-md-4">
                          <div class="card news-card">
                              <img src="{{asset('assets/news1.jpg')}}" class="card-img-top" alt="News 1">
                              <div class="card-body">
                                  <p class="card-text">آئی جی پی جی بی افضل محمود بٹ کی زیرصدارت جی بی پولیس۔۔</p>
                                  <a href="{{route('press_release')}}" class="btn btn-danger">Click to explore more</a>
                                  <p class="text-muted mt-2">24-03-2025</p>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="card news-card">
                              <img src="{{asset('assets/news2.jpg')}}" class="card-img-top" alt="News 2">
                              <div class="card-body">
                                  <p class="card-text">آئی جی جی بی/انسداد پولیو مہم/حفاظتی انتظامات/جائزہ۔۔</p>
                                  <a href="{{route('fronted-gallery')}}" class="btn btn-danger">Click to explore more</a>
                                  <p class="text-muted mt-2">22-03-2025</p>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="card news-card">
                              <img src="{{asset('assets/news3.jpg')}}" class="card-img-top" alt="News 3">
                              <div class="card-body">
                                  <p class="card-text"> آئی جی پی جی بی کی جانب سے شعبہ تفتیش اور کرائم ڈیٹا مینجمنٹ سسٹم۔۔</p>
                                  <a href="{{route('complain')}}" class="btn btn-danger">Click to explore more</a>
                                  <p class="text-muted mt-2">18-03-2025</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
        
  </div>  
  </div>  
  </div>  

    <!-- Quick Links -->
    <div class="container mt-5 mb-5">
      <h2 class="text-center mb-4">Quick Links</h2>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <!-- Card 1 -->
        <div class="col">
          <div class="card">
            <img
              src="https://www.shutterstock.com/image-vector/un-flag-isolated-white-symbol-260nw-2490132761.jpg"
              class="card-img-top"
              alt="UN Contribution"
            />
            <div class="card-body text-center">
              <h5 class="card-title">Contribution to UN</h5>
              <p class="card-text">
                A police officer from Gilgit Baltistan has been chosen UN....
              </p>
              <a href="{{route('un')}}" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col">
          <div class="card">
            <img
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1c/Flag_of_Gilgit-Baltistan_%281947%29.svg/2560px-Flag_of_Gilgit-Baltistan_%281947%29.svg.png"
              class="card-img-top"
              alt="Former IGP's"
            />
            <div class="card-body text-center">
              <h5 class="card-title">Former IGP's</h5>
              <p class="card-text">
                List of past IGP's of GB police from 1947 till now.
              </p>
              <a href="{{route('former')}}" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col">
          <div class="card">
            <img
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4PYAlDPaQU0EVzP1o8aRfWJeuINoI_hKBYQ&s"
              class="card-img-top"
              alt="Our Shuhada"
            />
            <div class="card-body text-center">
              <h5 class="card-title">Our Shuhada</h5>
              <p class="card-text">List of GB Police Department Shuhada.</p>
              <a href="{{route('shuhada')}}" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="col">
          <div class="card">
            <img
              src="https://cdn.pixabay.com/photo/2016/09/17/07/31/blue-light-1675687_1280.jpg"
              class="card-img-top"
              alt="Crime Statement"
            />
            <div class="card-body text-center">
              <h5 class="card-title">Crime Statement</h5>
              <p class="card-text">List of Crime Statement Year Wise in GB.</p>
              <a href="{{route('crime')}}" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>

   
 

  
   
<!-- Initialize Carousel with Autoplay -->
<!-- Bootstrap Carousel Settings -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const myCarousel = new bootstrap.Carousel(document.getElementById('autoSlider'), {
      interval: 3000, // 3 seconds
      wrap: true,
      pause: false // Keep autoplay even on hover
    });
  });
</script>
     {{-- <!-- Custom JavaScript for hover functionality -->
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
  </script> --}}

   


@endsection
 
 
