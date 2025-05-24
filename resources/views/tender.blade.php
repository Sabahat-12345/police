@extends('layouts.app',['title' => 'Tenders - Gilgit Baltistan Police'])
@section('main')
 <style>
        body {
            font-family: Arial, sans-serif;
        }
        .tender-header {
            text-align: center;
            padding: 20px;
            /* background-color: #232b3f; */
            /* color: white; */
        }
        .tender-list {
            margin: 20px;
        }
        .tender-item {
            padding: 15px;
            border: 1px solid #ddd;
            margin-bottom: 10px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .tender-title {
            font-size: 1.25rem;
            font-weight: bold;
        }
        .tender-details {
            margin-top: 10px;
            color: #555;
        }
        .btn-view-more {
            background-color: #232b3f;
            color: white;
            border: none;
            padding: 8px 15px;
            text-transform: uppercase;
        }
        .btn-view-more:hover {
            background-color: #4f5d73;
        }
        
    </style>
</head>
<body>




<section>

<!-- Tender Section -->
<div class="tender-header">
    <h1>Current Tenders</h1>
    <p>Find all available tenders for Gilgit Baltistan Police here.</p>
</div>

<!-- Tender List -->
<div class="container tender-list">
    <div class="tender-item">
        <div class="tender-title">Tender for Police Equipment Supply</div>
        <div class="tender-details">
            <p><strong>Posted On:</strong> March 20, 2025</p>
            <p><strong>Deadline:</strong> April 15, 2025</p>
            <p><strong>Details:</strong> Gilgit Baltistan Police is inviting tenders for the supply of police equipment including uniforms, vehicles, and communication gear.</p>
            <button class="btn-view-more" onclick="window.location.href='{{route('tender-details')}}'">View More</button>
        </div>
    </div>

    <div class="tender-item">
        <div class="tender-title">Tender for Security Infrastructure Projects</div>
        <div class="tender-details">
            <p><strong>Posted On:</strong> March 15, 2025</p>
            <p><strong>Deadline:</strong> April 10, 2025</p>
            <p><strong>Details:</strong> Bids are being accepted for security infrastructure upgrades across the region, including installation of CCTV cameras and lighting systems.</p>
            <button class="btn-view-more" onclick="window.location.href='{{route('tender-details2')}}'">View More</button>

        </div>
    </div>

    <!-- Add more tenders here as needed -->
</div>
</section>


@endsection
   