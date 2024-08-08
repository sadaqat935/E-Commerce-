@extends('master')

@section('content')
<div class="container">

    <div class="search"> 
        <h1>SEARCHED PRODUCTS</h1>
        <div class="carousel-inner">
            @foreach($products as $item)
            <div class="search-item">
                <a href="{{ url('prooducts/' . $item->id) }}">
                    <img src="{{ asset('uploads/' . $item->gallery) }}" class="card-img-top" alt="Product Image">
                    <div>
                        <h3>{{ $item->name }}</h3>
                        <p>ID: {{ $item->id }}</p>
                        <p>Price: {{ $item->price }}</p>
                        <p>Category: {{ $item->category }}</p>
                        <p>Description: {{ $item->description }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection
<style>
  /* General container styling */
.container {
    margin-top: 20px;
}

/* Header styling */
.search h1 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 2rem;
    color: #333;
}

/* Carousel inner container */
.carousel-inner {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

/* Individual search item styling */
.search-item {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    margin: 10px;
    padding: 15px;
    width: 300px; /* Adjust width as needed */
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

/* Search item image styling */
.search-item img.card-img-top {
    width: 100%;
    height: auto;
    border-bottom: 1px solid #ddd;
    margin-bottom: 10px;
}

/* Search item details styling */
.search-item div {
    padding: 10px;
}

/* Product name styling */
.search-item h3 {
    font-size: 1.2rem;
    margin: 0 0 10px;
    color: #007bff;
}

/* General text styling */
.search-item p {
    margin: 5px 0;
    color: #555;
}

/* Hover effect */
.search-item:hover {
    transform: scale(1.02);
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

</style>