<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Government Portal</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Font Awesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <style>
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
    </style>
  </head>
  <body>
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
                  href="{{route('safety_tips')}}.html"
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

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
