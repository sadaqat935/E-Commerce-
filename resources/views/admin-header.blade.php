<?php
use App\Http\Controllers\ProductController;
$total = ProductController::cartitem();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-dark text-white py-2">
    <a class="navbar-brand text-white" href="{{ url('admin-product') }}">Ecommerce</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
                @if(Session::has('person'))
            <form action="/search" class="form-inline my-2 my-lg-0 mr-3">
                <input class="form-control mr-sm-2 search-bar" type="search" name="query" placeholder="Search" aria-label="Search" style="width: 500px;">
                <button class="btn btn-light my-2 my-sm-0" type="submit">Search</button>
            </form>

            <!-- Orders button with custom class -->
           <div class="hello">
           <li class="nav-item">
                <a class="nav-link text-white custom-btn" href="{{ url('/orders') }}">Orders</a>
            </li>
            <!-- Cart Item button with custom class -->
            <li class="nav-item">
                <a class="nav-link text-white custom-btn" href="{{ url('/cartlist') }}">Cart Item ({{ $total }})</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white custom-btn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  (A){{ Session::get('person')['name'] }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('admin-logout') }}">Logout</a>
                    <a class="dropdown-item" href="{{ url('admin-add') }}">Add Product</a>
                    <a class="dropdown-item" href="{{ url('/delete') }}">Delete Product</a>
                </div>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ url('/admin') }}">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ url('/adminlogin') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ url('/admin') }}">Register</a>
            </li>
            @endif
           </div>
        </ul>
    </div>
</nav>
<style>
/* Custom CSS for Navbar Buttons */
.custom-btn {
}
.hello{
    margin-left: 320px;
    display: flex;
}
/* Optional: Ensure alignment for items */

</style>
