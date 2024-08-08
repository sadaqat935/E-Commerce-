@extends('master')

@section('content')

<div class="container">
    <div class="trending-wrapper">
        <h1 class="my-4 text-center">Wishlist Products</h1>
        
        @foreach($products as $item)
        <div class="row cart-list-divider mb-4 border rounded p-3">
            <!-- Product Image -->
            <div class="col-sm-3 mb-3 mb-sm-0">
                <a href="{{ url('product/' . $item->id) }}" class="product-link text-decoration-none">
                    <div class="product-image">
                        <img src="{{ asset('uploads/' . $item->gallery) }}" alt="Product Image" class="img-fluid rounded">
                    </div>
                </a>
            </div>

            <!-- Product Details -->
            <div class="col-sm-6 mb-3 mb-sm-0">
                <a href="{{ url('product/' . $item->id) }}" class="product-link text-decoration-none text-dark">
                    <div class="product-details">
                        <h5 class="mb-2">{{ $item->name }}</h5>
                        <p class="text-muted">{{ $item->description }}</p>
                    </div>
                </a>
            </div>

            <!-- Product Actions -->
            <div class="col-sm-3 d-flex flex-column justify-content-center align-items-start mt-3 mt-sm-0">
                <form action="{{ route('addtocart') }}" method="POST" class="mb-2">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $item->id }}">
                    <button type="submit" class="btn btn-success w-100">Add to Cart</button>
                </form>
                <a href="{{ url('removed/' . $item->wishlistid) }}" class="btn btn-danger w-50">Remove</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

@section('styles')
<style>
    .trending-wrapper {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
    }

    .cart-list-divider {
        background-color: #ffffff;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        transition: box-shadow 0.3s;
    }

    .cart-list-divider:hover {
        box-shadow: 0 8px 12px rgba(0,0,0,0.2);
    }

    .product-link:hover .product-image img {
        transform: scale(1.05);
        transition: transform 0.3s;
    }

    .product-image img {
        border-radius: 8px;
    }

    .product-details h5 {
        font-size: 1.25rem;
        font-weight: bold;
    }

    .product-details p {
        font-size: 1rem;
        color: #6c757d;
    }

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }
    
 
</style>


@endsection
<style>
    .links{
        margin-right:35px;
    }
</style>