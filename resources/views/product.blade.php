@extends('master')

@section('content')
<section id="slider" class="mt-4">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.pexels.com/photos/996329/pexels-photo-996329.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100 carousel-custom-size" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Exclusive Offer 1</h5>
                    <p>Don’t miss out on our exclusive offer!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/276528/pexels-photo-276528.jpeg" class="d-block w-100 carousel-custom-size" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Special Discount</h5>
                    <p>Get a special discount on select items!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/774448/pexels-photo-774448.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100 carousel-custom-size" alt="Slide 3">
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
        <div class="row items">
            <!-- Product Item -->
            @foreach($products as $item)
            <div class="col-md-4 mb-4">
                <div class="card product-card">
                    <img src="{{ asset('uploads/' . $item->gallery) }}" class="card-img-top product-image" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">${{ $item->price }}</p>
                        <a href="prooducts/{{ $item->id }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

<style>
    .carousel-inner {
        width: 80%; /* Adjust the width as needed */
        height: 400px; /* Set the height of the carousel */
        margin: 0 auto; /* Center the carousel */
    }

    .carousel-item img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Ensure the image covers the entire container */
    }

    .carousel-caption h5 {
        font-size: 2rem; /* Adjust the font size as needed */
        color: black;
    }

    .carousel-caption p {
        color: black;
    }

    .product-card {
        width: 300px; /* Set specific width for product cards */
        height: 400px; /* Set specific height for product cards */
        overflow: hidden; /* Ensure content does not overflow */
        margin: auto; /* Center the cards horizontally */
    }

    .product-image {
        width: 100%; /* Ensure image takes full width of the card */
        height: 200px; /* Set specific height for product images */
        object-fit: cover; /* Ensure the image covers the entire area without distortion */
    }

    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-title, .card-text {
        text-align: center;
    }
</style>

@section('footer')
{{ View::make('footer') }}
@endsection
