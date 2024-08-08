@extends('layouts.admin-master')

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
                     
                        
                        <!-- <form action="{{ url('/buy/' . $items->id) }}" method="POST" class="mt-2 ml-3">
                         @csrf
                           <button type="submit" class="btn btn-primary">Buy Now</button>
                        </form> -->

                    </div>
                </div>
            @else
                <p>Product not Found</p>
            @endif
        </div>
    </div>
 </div>
@endsection


<style>
 .custom-cart-item {
 
 margin-left:340px;
}

/* Custom styles for username link */
.custom-username {
 font-weight: bold;

 color: #00cc99; /* Change this color to your preference */
 text-shadow: 1px 1px 2px #000; /* Optional text shadow */
 margin-right:30px;
}

.search-bar{
 margin-right:20px;
}
</style>