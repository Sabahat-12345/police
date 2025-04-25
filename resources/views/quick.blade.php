<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Quick Links</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet" />
   
    <style>
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
    </style>
  </head>
  <body>
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
                  <a href="{{route('complain')}}" class="text-light text-decoration-none small"
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
