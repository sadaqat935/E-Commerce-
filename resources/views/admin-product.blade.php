@extends('layouts.admin-master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Carousel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <style>
    .carousel-caption h5 {
            font-size: 2rem;
            margin-top:-500px;
        }
       
        .carousel-inner{
            width: 100%;
            height:400px;
        }
        /* Custom styles for cart item link */


/* .search-bar{
 margin-left:20px;
} */
    </style>
</head>

<body>
<section id="slider" class="mt-4">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.pexels.com/photos/68507/spring-flowers-flowers-collage-floral-68507.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="Slide 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Exclusive Offer 1</h5>
                        <p>Don’t miss out on our exclusive offer!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/312029/pexels-photo-312029.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="Slide 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Special Discount</h5>
                        <p>Get a special discount on select items!</p>
                    </div>
                </div>
                <div class="carousel-item">
                <img src="https://images.pexels.com/photos/4846097/pexels-photo-4846097.jpeg" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                        <h5>New Arrivals</h5>
                        <p>Check out our latest products!</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>



<section id="products" class="mt-4">
        <div class="container">
            <h2 class="text-center mb-4">Featured Products</h2>
            <div class="row">
                <!-- Product Item -->
                @foreach($products as $key => $item)

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('uploads/' . $item->gallery) }}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $item->name }}</h5>
                            <p class="card-text">{{ $item->price }}</p>
                            <a href="product/{{$item->id}}" class="btn btn-primary">View Details</a>
                            <a href="products/{{$item->id}}" class="btn btn-danger">Delete </a>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    @endsection

        @section('footer')
        {{ View::make('footer') }}
    @endsection
    </body>
    </html>


