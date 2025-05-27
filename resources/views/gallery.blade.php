@extends('layouts.app',['title' => 'Gallery - Gilgit Baltistan Police'])
@section('main')
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

<!-- Gallery Section -->
<div class="container gallery-container">
    <h2 class="text-center mb-4">Gilgit Baltistan Police Gallery</h2>
    <div class="row">

        @forelse ($galleries as $gallery)
              <div class="col-md-4 mb-4">
            <div class="gallery-item">
                <img src="{{asset($gallery->image_path)}}" alt="Police Event">
            </div>
        </div>
        @empty
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
        @endforelse
    </div>
</div>

@endsection
   



