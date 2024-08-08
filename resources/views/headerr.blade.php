<?php
use App\Http\Controllers\ProductController;
$total=ProductController::cartitem();
?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="product">E-Comm</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="">Home </a></li>
        <li><a href="orders">Orders</a></li>
       
      </ul>
      <form action="/search" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="query" class="form-control" style="width:500px" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      
      <ul class="nav navbar-nav navbar-right">
      <ul class="nav navbar-nav">
    <li><a href="{{ url('/cartlist') }}">Cart Item({{$total}})</a></li>
    @if(Session::has('user'))
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Session::get('user')['name'] }}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{ url('/logout') }}">Logout</a></li>
                <li><a href="{{ url('/addproduct') }}">Add product</a></li>

            </ul>
        </li>
    @else
        <li><a href="{{ url('/login') }}">Login</a></li>
        <li><a href="{{ url('/register') }}">Register</a></li>

    @endif
</ul>


      </ul>
    </div>
  </div>
</nav>


<nav class="navbar navbar-expand-lg navbar-light bg-lightbg-dark text-white py-2">
        <a class="navbar-brand" href="#">Ecommerce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
