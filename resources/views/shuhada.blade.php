@extends('layouts.app',['title' => 'GB Police Shuhada'])
@section('main')
     <style>
      
        .martyr-card {
            transition: transform 0.3s;
            border: 1px solid #ddd;
        }
        .martyr-card:hover {
            transform: translateY(-5px);
        }
        .shaheed-name {
            font-family: 'Arial', sans-serif;
            font-weight: bold;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
        }
    </style>
    
<section>
<div class="container py-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Original 3 Martyrs -->
        <div class="col">
            <div class="card h-100 martyr-card">
                <img src="{{asset('assets/1.jpg')}}" class="card-img-top" alt="Shaheed DSP Muhammad Ali" style="height: 300px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="shaheed-name text-danger">Shaheed DSP Muhammad Ali</h5>
                    <small class="text-muted">Sacrificed: 2015</small>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 martyr-card">
                <img src="{{asset('assets/2.jpg')}}" class="card-img-top" alt="Shaheed Constable Ahmed Khan" style="height: 300px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="shaheed-name text-danger">Shaheed Constable Ahmed Khan</h5>
                    <small class="text-muted">Sacrificed: 2018</small>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 martyr-card">
                <img src="{{asset('assets/3.jpg')}}" class="card-img-top" alt="Shaheed Inspector Jamil Ahmed" style="height: 300px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="shaheed-name text-danger">Shaheed Inspector Jamil Ahmed</h5>
                    <small class="text-muted">Sacrificed: 2020</small>
                </div>
            </div>
        </div>

        <!-- Additional 3 Martyrs -->
        <div class="col">
            <div class="card h-100 martyr-card">
                <img src="{{asset('assets/4.jpg')}}" class="card-img-top" alt="Shaheed ASI Ghulam Rasool" style="height: 300px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="shaheed-name text-danger">Shaheed ASI Ghulam Rasool</h5>
                    <small class="text-muted">Sacrificed: 2016</small>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 martyr-card">
                <img src="{{asset('assets/5-WA0018.jpg')}}" class="card-img-top" alt="Shaheed Constable Naveed Iqbal" style="height: 300px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="shaheed-name text-danger">Shaheed Constable Naveed Iqbal</h5>
                    <small class="text-muted">Sacrificed: 2019</small>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 martyr-card">
                <img src="{{asset('assets/6.jpg')}}" class="card-img-top" alt="Shaheed Inspector Farooq Ahmed" style="height: 300px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="shaheed-name text-danger">Shaheed Inspector Farooq Ahmed</h5>
                    <small class="text-muted">Sacrificed: 2021</small>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
   

