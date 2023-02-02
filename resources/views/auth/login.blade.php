@extends('layouts.app')

@section('title')
    Login | Amazing E-Grocery
@endsection

@section('content')
<div class="container col-md-6 my-5">
    <h1 class="h2 mb-4 fw-bold">Login</h1>
    <form action={{url('/login')}} method="post">
        @csrf
        <div class="form-group mb-3">
            <label class="fw-bold" for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>
        <div class="form-group mb-4">
            <label class="fw-bold" for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
        </div>
        <div class="d-flex align-items-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-link" href="/register">
                Don't have an account? Click here to sign up
            </a>
        </div>
    </form>
</div>
@endsection