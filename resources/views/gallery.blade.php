<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery - Gilgit Baltistan Police</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .gallery-container {
            max-width: 1200px;
            margin: 40px auto;
        }
        .gallery-item {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .gallery-item img {
            width: 100%;
            height: 250px;  /* Ensure all images have the same height */
            object-fit: cover;  /* Maintain aspect ratio */
            transition: transform 0.3s;
        }
        .gallery-item:hover img {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #232b3f;">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">Gilgit Baltistan Police</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
            >
                <li class="nav-item"><a class="nav-link active" href="{{route('gallery')}}">Gallery</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Gallery Section -->
<div class="container gallery-container">
    <h2 class="text-center mb-4">Gilgit Baltistan Police Gallery</h2>
    <div class="row">
        <!-- Existing images -->
        <div class="col-md-4 mb-4">
            <div class="gallery-item">
                <img src="{{asset('assets/police event.jpg')}}" alt="Police Event">
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="gallery-item">
                <img src="{{asset('assets/Traning.jpg')}}" alt="Training Session">
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="gallery-item">
                <img src="{{asset('assets/community.jpg')}}" alt="Community Service">
            </div>
        </div>

        <!-- New images -->
        <div class="col-md-4 mb-4">
            <div class="gallery-item">
                <img src="{{asset('assets/Police Patrolling.jpg')}}" alt="Police Patrolling">
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="gallery-item">
                <img src="{{asset('assets/Road Safety.jpg')}}" alt="Road Safety">
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="gallery-item">
                <img src="{{asset('assets/Community Engagement.jpg')}}" alt="Community Engagement">
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
