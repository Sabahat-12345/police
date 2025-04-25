<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Opportunities - Gilgit Baltistan Police</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .job-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: white;
        }
        .job-card h5 {
            color: #232b3f;
        }
        .apply-btn {
            background-color: #dc3545;
            color: white;
        }
        .apply-btn:hover {
            background-color: #bb2d3b;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #232b3f;">
    <div class="container">
        <a class="navbar-brand" href="index.html">Gilgit Baltistan Police</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{route('job')}}">Jobs</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Job Listings -->
<div class="container mt-4">
    <h2 class="text-center mb-4">Current Job Openings</h2>
    
    <!-- Job 1 -->
    <div class="job-card">
        <h5>Police Constable</h5>
        <p><strong>Location:</strong> Gilgit Baltistan</p>
        <p><strong>Requirements:</strong> Minimum Matriculation, Physical fitness test</p>
        <p><strong>Deadline:</strong> 15th April 2025</p>
        <a href="{{route('apply')}}" class="btn apply-btn">Apply Now</a>
    </div>

    <!-- Job 2 -->
    <div class="job-card">
        <h5>Sub-Inspector</h5>
        <p><strong>Location:</strong> Gilgit Baltistan</p>
        <p><strong>Requirements:</strong> Graduation, Written & Physical test</p>
        <p><strong>Deadline:</strong> 25th April 2025</p>
        <a href="{{route('apply')}}" class="btn apply-btn">Apply Now</a>
    </div>

    <!-- Job 3 -->
    <div class="job-card">
        <h5>IT Officer</h5>
        <p><strong>Location:</strong> Gilgit</p>
        <p><strong>Requirements:</strong> Bachelor's in Computer Science or IT</p>
        <p><strong>Deadline:</strong> 30th April 2025</p>
        <a href="{{route('apply')}}" class="btn apply-btn">Apply Now</a>
    </div>

</div>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
