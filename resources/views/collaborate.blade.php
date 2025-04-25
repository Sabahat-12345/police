@extends('layouts.app',['title'=>'Collaborate with Gilgit Baltistan Police'])
@section('main')
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
 
</style>

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

                        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                            
                      
                          <form method="Post" action="{{route('collaborate.post')}}">
                            @csrf
                              <div class="mb-3">
                                  <input type="text" class="form-control" placeholder="Your Name" name="name">
                                  @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                              </div>
                              <div class="mb-3">
                                  <input type="email" class="form-control" placeholder="Email Address" name="email">
                                  @error('email')
                                  <div class="text-danger">{{ $message }}</div>
                              @enderror
                              </div>
                              <div class="mb-3">
                                  <textarea class="form-control" rows="4" placeholder="Your Message" name="message"></textarea>
                                  @error('message')
                                  <div class="text-danger">{{ $message }}</div>
                              @enderror
                              </div>
                              <button class="btn btn-primary w-100">Send Message</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  



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

@endsection
   
  

 
