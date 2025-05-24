@extends('layouts.app',['title' => 'Tender Details - Gilgit Baltistan Police'])
@section('main')
 <style>
        body {
            font-family: Arial, sans-serif;
        }
        .tender-details-section {
            padding: 20px;
        }
        .tender-title {
            font-size: 2rem;
            font-weight: bold;
        }
        .tender-description {
            margin-top: 20px;
            font-size: 1.1rem;
            line-height: 1.5;
        }
        .btn-back {
            background-color: #232b3f;
            color: white;
            padding: 10px 15px;
            text-transform: uppercase;
            border: none;
            margin-top: 20px;
        }
        .btn-back:hover {
            background-color: #4f5d73;
        }
    </style>

<!-- Tender Details Section -->
<div class="container tender-details-section">
    <div class="tender-title">Tender for Security Infrastructure Projects</div>
    <div class="tender-description">
        <p><strong>Posted On:</strong> March 15, 2025</p>
        <p><strong>Deadline:</strong> April 10, 2025</p>
        <p><strong>Details:</strong> The Gilgit Baltistan Police is seeking tenders for the installation and upgrade of security infrastructure across the region. This includes the setup of CCTV surveillance systems, street lighting, security barriers, and public safety systems at key locations such as police stations, high-traffic areas, and government buildings. The scope of work includes:</p>
        <ul>
            <li><strong>CCTV Surveillance Systems:</strong> Installation of high-definition CCTV cameras at strategic locations.</li>
            <li><strong>Street Lighting Systems:</strong> Installation of energy-efficient streetlights in high-risk areas.</li>
            <li><strong>Security Barriers:</strong> Installation of automated and manual security barriers at critical entry points.</li>
            <li><strong>Public Safety Systems:</strong> Installation of emergency alarms and public address systems in public spaces.</li>
        </ul>
        <p><strong>Requirements:</strong> Bidders must have proven experience in handling large-scale security infrastructure projects, including installation and maintenance of CCTV, lighting, and security systems. The bid must comply with local regulations and international standards for security equipment.</p>
        <p><strong>Contact Information:</strong> For more details and tender documents, please contact the Police Department at <strong>(05811) 234567</strong> or email <strong>tenders@gbpolice.gov.pk</strong>.</p>
    </div>
    
    <button class="btn-back" onclick="window.history.back();">Back to Tenders</button>
</div>



@endsection
   
