<?php
use App\Http\Controllers\ProductController;
$total = ProductController::count();
$order = ProductController::ordercount();

use App\Http\Controllers\UserController;
$totals = UserController::count();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        #wrapper {
            display: flex;
            align-items: stretch;
        }

        #sidebar-wrapper {
            min-width: 250px;
            max-width: 250px;
            height: 100vh;
            background-color: #343a40;
        }

        #page-content-wrapper {
            width: 100%;
            padding: 20px;
        }

        .toggled #sidebar-wrapper {
            margin-left: -250px;
        }

        .sidebar-heading {
            padding: 1rem;
            font-size: 1.2rem;
            text-align: center;
            background-color: #6c757d;
            color: white;
        }

        .list-group-item-action:hover {
            background-color: #495057;
            color: white;
        }

        .list-group-item {
            background-color: #343a40;
            color: white;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            
        }

        .stats {
            margin-top: 20px;
        }

        .stat-item {
            margin-bottom: 20px;
        }

        .search-bar {
            width: 700px;
        }
        .login-message {
            text-align: center;
            padding: 20px;
            border: 2px solid #dc3545;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .login-message h2 {
            color: #dc3545;
        }

        .login-message p {
            margin-top: 10px;
        }

    </style>
</head>
<body>
@if(Session::has('person'))

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">

            <div class="sidebar-heading">Admin Dashboard</div>
            <div class="list-group list-group-flush">
                <a href="name" class="list-group-item list-group-item-action">Dashboard</a>
                <a href="adminorder" class="list-group-item list-group-item-action">Orders</a>
                <a href="admin-pproduct" class="list-group-item list-group-item-action">Products</a>
                <a href="customers" class="list-group-item list-group-item-action">Customers</a>
                <a href="#" class="list-group-item list-group-item-action">Setting</a>
                <a href="admin-logout" class="list-group-item list-group-item-action">Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="name">Home <span class="sr-only">(current)</span></a>
                        </li>
                       
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Admin
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                             
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="admin-logout">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

        
            <div class="container-fluid">
                <div class="header mt-4 ml-lg-5 mb-4">
                    <h2> Welcome,{{ Session::get('person')['name'] }} </h2>
                </div>
                
                <div class="content ">
                    <!-- Add your dashboard content here -->
                    <h3>Dashboard Overview</h3>
                    <div class="row stats">
                        <div class="col-md-3 stat-item">
                            <div class="card bg-light mb-3">
                                <div class="card-header">Orders</div>
                                <div class="card-body">
                                    <h5 class="card-title">{{$order}}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 stat-item">
                            <div class="card bg-light mb-3">
                                <div class="card-header">Products</div>
                                <div class="card-body">
                                    <h5 class="card-title">{{$total}}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 stat-item">
                            <div class="card bg-light mb-3">
                                <div class="card-header">Customers</div>
                                <div class="card-body">
                                    <h5 class="card-title">{{$totals}}</h5>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
                
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
     @else
    <div class="login-message">
        <h2>PLEASE LOGIN</h2>
        <p class="lead">You need to be logged in to access this page. Please <a href="adminlogin" class="btn btn-primary mt-3">Login</a></p>
    </div>    @endif
    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>




<!-- 
@if(Session::has('person'))
            <div class="container-fluid">
                <div class="header mt-4 mb-4">
                    <h2> Welcome,{{ Session::get('person')['name'] }} </h2>
                    @else <h2>Welcom , Admin</h2>
                    @endif  
                    <input type="search" placeholder="Search..." class="form-control search-bar">
                </div> -->