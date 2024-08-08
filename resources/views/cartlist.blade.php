    @extends('master')

    @section('content')

    <div class="container">
        <div class="trending-wrapper">
            <h1 class="my-4 text-center">Cart Products</h1>
            <a class="btn btn-success mb-4" href="{{ url('ordernow') }}">Order Now</a>
            
            @foreach($products as $item)
            <div class="row cart-list-divider mb-4">
                <!-- Product Image -->
                <div class="col-sm-3">
                    <a href="{{ url('prooducts/' . $item->id) }}" class="product-link">
                        <div class="product-image">
                            <img src="{{ asset('uploads/' . $item->gallery) }}" alt="Product Image" class="img-fluid">
                        </div>
                    </a>
                </div>

                <!-- Product Details -->
                <div class="col-sm-6">
                    <a href="{{ url('prooducts/' . $item->id) }}" class="product-link text-decoration-none">
                        <div class="product-details">
                            <h5>{{ $item->name }}</h5>
                            <p>{{ $item->description }}</p>
                            <!-- You can place other details here -->
                        </div>
                    </a>
                </div>

                <!-- Product Actions -->
                <div class="col-sm-3 d-flex align-items-center">
                    <a href="{{ url('remove/' . $item->cartid) }}" class="btn btn-warning">Remove from Cart</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @endsection



<style>
    .links{
        margin-right:35px;
    }
</style>

