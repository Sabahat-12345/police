<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest News & Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .news-card img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center">Latest News & Events</h2>
        <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card news-card">
                                <img src="{{asset('assets/news1.jpg')}}" class="card-img-top" alt="News 1">
                                <div class="card-body">
                                    <p class="card-text">آئی جی پی جی بی افضل محمود بٹ کی زیرصدارت جی بی پولیس۔۔</p>
                                    <a href="{{route('press_release')}}" class="btn btn-danger">Click to explore more</a>
                                    <p class="text-muted mt-2">24-03-2025</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card news-card">
                                <img src="{{asset('assets/news2.jpg')}}" class="card-img-top" alt="News 2">
                                <div class="card-body">
                                    <p class="card-text">آئی جی جی بی/انسداد پولیو مہم/حفاظتی انتظامات/جائزہ۔۔</p>
                                    <a href="{{route('gallery')}}" class="btn btn-danger">Click to explore more</a>
                                    <p class="text-muted mt-2">22-03-2025</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card news-card">
                                <img src="{{asset('assets/news3.jpg')}}" class="card-img-top" alt="News 3">
                                <div class="card-body">
                                    <p class="card-text"> آئی جی پی جی بی کی جانب سے شعبہ تفتیش اور کرائم ڈیٹا مینجمنٹ سسٹم۔۔</p>
                                    <a href="{{route('complain')}}" class="btn btn-danger">Click to explore more</a>
                                    <p class="text-muted mt-2">18-03-2025</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
  <!-- </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div> -->