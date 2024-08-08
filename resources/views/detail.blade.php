@extends('master')

@section('content')
<div class="container">
    <h1 class="my-4 text-center">Product Detail</h1>
    
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-6">
            @if ($items && $items->gallery)
                <div class="product-image text-center">
                    <img src="{{ asset('uploads/' . $items->gallery) }}" alt="{{ $items->name }}" class="img-fluid">
                </div>
            @else
                <div class="product-image text-center">
                    <p>No image available.</p>
                </div>
            @endif
        </div>
        
        <!-- Product Details -->
        <div class="col-md-6">
            @if($items)
                <div class="product-details">
                    <h2 class="product-name">{{ $items->name }}</h2>
                    <p class="product-id"><strong>ID:</strong> {{ $items->id }}</p>
                    <p class="product-price"><strong>Price:</strong> ${{ $items->price }}</p>
                    <p class="product-category"><strong>Category:</strong> {{ $items->category }}</p>
                    <p class="product-description"><strong>Description:</strong> {{ $items->description }}</p>
                    
                    <!-- Action Buttons -->
                    <div class="mt-4">
                        <form action="{{ route('addtocart') }}" method="POST" class="d-inline">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $items->id }}">
                            <button type="submit" class="btn btn-success">Add to Cart</button>
                        </form>

                        <form action="{{ route('addtowishlist') }}" method="POST" class="d-inline ml-2">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $items->id }}">
                            <button type="submit" class="btn btn-warning">Add to Wishlist</button>
                        </form>
                        
                        <!-- Uncomment the following block for the Buy Now button -->
                        <!-- 
                        <form action="{{ url('/buy/' . $items->id) }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-primary ml-2">Buy Now</button>
                        </form>
                        -->
                    </div>
                </div>
            @else
                <p>Product not found.</p>
            @endif
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .custom-cart-item {
        margin-left: 340px;
    }

    /* Custom styles for username link */
    .custom-username {
        font-weight: bold;
        color: #00cc99; /* Change this color to your preference */
        text-shadow: 1px 1px 2px #000; /* Optional text shadow */
        margin-right: 30px;
    }

    .product-image img {
        max-width: 100%;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .product-details {
        padding: 20px;
        background: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .product-name {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .product-id,
    .product-price,
    .product-category,
    .product-description {
        font-size: 16px;
        margin-bottom: 8px;
    }

    .btn-success,
    .btn-warning,
    .btn-primary {
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 4px;
    }

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
</style>
@endpush
