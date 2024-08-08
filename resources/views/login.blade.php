@extends('master')

@section('content')
<div class="container register-container">
        <div class="card register-card">
            <div class="card-header register-card-header">
                <h4 class="mb-0">Login</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="login">
                    @csrf
                   
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email"  required>
                      
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control " id="password" name="password" required>
                      
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
                <div class="text-center mt-3">
                    <a href="register">Don’t have an account? Register</a>
                </div>
            </div>
        </div>
    </div>

@endsection
