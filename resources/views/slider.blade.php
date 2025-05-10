@extends('layouts.app',['title' => 'Auto-Change Slider'])
@section('main')
<style>
    .carousel-inner {
        height: 600px;
    }

    .carousel-item img {
        object-fit: cover;
        width: 100%;
        height: 100%;
    }

    /* Make carousel height responsive on smaller screens */
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

     

</style>
<!-- Carousel -->
<section class="section py-0">
<div id="autoSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <!-- Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#autoSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#autoSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#autoSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    
    <!-- Slides -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('assets/slider1.jpg') }}" class="d-block w-100 img-fluid" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/slider2.png') }}" class="d-block w-100 img-fluid" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/slider3.jpg') }}" class="d-block w-100 img-fluid" alt="Slide 3">
        </div>
    </div>
</div>
</section>
<!-- Initialize Carousel with Autoplay -->
<script>
    const myCarousel = new bootstrap.Carousel(document.getElementById('autoSlider'), {
        interval: 3000,
        wrap: true,
        pause: false
    });
</script>



@endsection
    
   
    
    



