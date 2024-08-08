@extends('master')

@section('content')
<div class="container register-container">
        <div class="card register-card">
            <div class="card-header register-card-header">
                <h4 class="mb-0">Add Products</h4>
            </div>
            <div class="card-body">
            <form action="addproducts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Product Name">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" placeholder="Enter Product price">
            </div>
          
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" class="form-control" name="category" placeholder="Enter Product category">
            </div>
            <div class="form-group">
                <label for="subcategory">Sub Category</label>
                <input type="text" class="form-control" name="subcategory" placeholder="Enter Product category">
            </div>
            <div class="form-group">
                <label for="gallery">Add Picture</label>
                <input type="file" class="form-control" name="gallery" placeholder="Add Picture">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" placeholder="Add description">
            </div>
                
                    
                    <button type="submit" class="btn btn-primary btn-block">ADD PRODUCT</button>
                </form>
               
            </div>
        </div>
    </div>
@endsection


<!-- <form action="addproducts" method="POST" enctype="multipart/form-data">
<div class="form-group">
                <label for="gallery">Add Picture</label>
                <input type="file" class="form-control" name="gallery" placeholder="Add Picture">
            </div> -->