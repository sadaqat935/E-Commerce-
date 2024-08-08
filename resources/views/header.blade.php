<?php
use App\Http\Controllers\ProductController;
$total = ProductController::cartitem();
$totals = ProductController::wishlistitem();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome (for icons) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

    <title>My Website</title>
    <style>
        .navbar {
            background-color: #343a40;
        }
        .navbar-brand {
            color: #ffffff;
            margin-left: 30px; /* Margin left added to E-Shop */
        }
   
        .navbar-nav .nav-link:hover {
            color: #d1d1d1; /* Light color on hover */
        }
        .search-bar {
            max-width: 200px;
        }
        .dropdown-menu {
            border-radius: 0;
        }
        .dropdown-menu .dropdown-item:hover {
            background-color: #f8f9fa;
        }
        .dropdown-submenu {
            position: relative;
        }
        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
            display: none;
            border-radius: 0;
        }
        .dropdown-submenu:hover .dropdown-menu {
            display: block;
        }
        .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.1);
        }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath stroke='currentColor' stroke-width='2' d='M4 6h16M4 12h16m-7 6h7'/%3E%3C/svg%3E");
        }
        .kit {
            margin-right: 97px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="{{ url('/product') }}">E-Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="d-flex flex-grow-1 align-items-center justify-content-between">
                <!-- Search Form -->
                <form action="/search" class="form-inline my-0 my-lg-0">
                    <input class="form-control mr-sm-2 search-bar" type="search" name="query" placeholder="Search" aria-label="Search">
                    <button class="btn btn-light my-2 my-sm-0" type="submit">Search</button>
                </form>
                <div class="links kit">
                    <ul class="navbar-nav d-flex flex-row">
                        <!-- Navigation Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('product') }}">
                                <i class="fas fa-home"></i> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/shop') }}">
                                <i class="fas fa-store"></i> Shop
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">
                                <i class="fas fa-info-circle"></i> About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">
                                <i class="fas fa-envelope"></i> Contact
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="#">Clothing</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="men">Men</a></li>
                                        <li><a class="dropdown-item" href="woman">Women</a></li>
                                        <li><a class="dropdown-item" href="winter">Winter</a></li>
                                        <li><a class="dropdown-item" href="summer">Summer</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="#">Furniture</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="chair">Chair</a></li>
                                        <li><a class="dropdown-item" href="bed">Bed</a></li>
                                        <li><a class="dropdown-item" href="sofa">Sofa</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="#">Fashion</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="glasses">Glasses</a></li>
                                        <li><a class="dropdown-item" href="jewllery">Jewellery</a></li>
                                        <li><a class="dropdown-item" href="ring">Rings</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item" href="#">Electronics</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="led">LED</a></li>
                                        <li><a class="dropdown-item" href="mobile">Mobile</a></li>
                                        <li><a class="dropdown-item" href="machine">Machine</a></li>
                                        <li><a class="dropdown-item" href="fan">Fan</a></li>
                                        <li><a class="dropdown-item" href="laptop">Laptop</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        @if(Session::has('user'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/cartlist') }}">Cart 
                                <i class="fas fa-shopping-cart"></i> ({{ $total }})
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/wishlist') }}">Wishlist 
                                <i class="fas fa-heart"></i> ({{ $totals }})
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownUser" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Session::get('user')['name'] }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownUser">
                                <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                                <a class="dropdown-item" href="{{ url('/addproduct') }}">Add products</a>
                            </div>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/register') }}">Register</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content and Footer -->

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
