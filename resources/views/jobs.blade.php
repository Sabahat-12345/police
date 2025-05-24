@extends('layouts.app',['title' => 'Job Opportunities - Gilgit Baltistan Police'])
@section('main')
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

<section>
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
</section>

@endsection
    

