<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Add New Product</title>
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
            flex: 1;
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

        .form-container {
            max-width: 800px;
            margin: auto;
        }

        .btn-submit {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="sidebar-heading">Admin Dashboard</div>
            <div class="list-group list-group-flush">
                <a href="name" class="list-group-item list-group-item-action">Dashboard</a>
                <a href="adminorder" class="list-group-item list-group-item-action">Orders</a>
                <a href="admin-pproduct" class="list-group-item list-group-item-action">Products</a>
                <a href="customers" class="list-group-item list-group-item-action">Customers</a>
                <a href="#settings" class="list-group-item list-group-item-action">Settings</a>
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
                                <a class="dropdown-item" href="admin-logout">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid">
                <div class="header mt-4 mb-4">
                    <h2>Add New Product</h2>
                </div>

                <div class="form-container">
                    <form method="POST" action="{{ url('adminaddpro') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter product name" required>
                        </div>

                        <div class="form-group">
                            <label for="category">Category</label>
                            <input type="text" name="category" id="category" class="form-control" placeholder="Enter product category" required>
                        </div>
                        <div class="form-group">
                            <label for="subcategory">Sub Category</label>
                            <input type="text" name="subcategory" id="subcategory" class="form-control" placeholder="Enter product subcategory" required>
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" class="form-control" placeholder="Enter product price" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4" placeholder="Enter product description" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="gallery">Product Image</label>
                            <input type="file" name="gallery" id="image" class="form-control-file">
                        </div>

                        <button type="submit" class="btn btn-success btn-submit">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

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
