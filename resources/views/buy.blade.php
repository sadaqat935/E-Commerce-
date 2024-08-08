@extends('master')

@section('content')
<div class="container buy-now-page">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-5">
                <div class="card-header bg-primary text-white text-center">
                    <h2>Buy Now</h2>
                </div>
                <div class="card-body">
                    <form action="ordernow" method="POST">
                        @csrf
                        @if($items)
                        <div class="form-group">
                            <label for="productName">Product Name</label>
                            <input type="text" id="productName" name="productName" class="form-control" value="{{ $items->name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Price</label>
                            <input type="text" id="productPrice" name="productPrice" class="form-control" value="${{ $items->price }}" readonly>
                        </div>
                        @else
                        <p>Not Found</p>
                        @endif
                        <div class="form-group">
                            <label for="customerName">Your Name</label>
                            <input type="text" id="customerName" name="customerName" class="form-control" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="customerEmail">Email Address</label>
                            <input type="email" id="customerEmail" name="customerEmail" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="customerAddress">Shipping Address</label>
                            <textarea id="customerAddress" name="customerAddress" class="form-control" placeholder="Enter your address" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="paymentMethod">Payment Method</label>
                            <select id="paymentMethod" name="paymentMethod" class="form-control" required>
                                <option value="online">Online Payment</option>
                                <option value="emi">EMI Payment</option>
                                <option value="cod">Cash on Delivery</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Place Order</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .buy-now-page {
        background-color: #f8f9fa;
        padding: 50px 0;
    }
    .card {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .card-header {
        border-bottom: 2px solid #fff;
    }
    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
    }
    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }
    .form-control {
        border-radius: 0;
        border: 1px solid #ced4da;
    }
    .form-control:focus {
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
</style>
@endsection
