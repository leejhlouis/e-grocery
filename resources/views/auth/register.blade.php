@extends('layouts.app')

@section('title')
    Register | Amazing E-Grocery
@endsection

@section('content')
<div class="container col-md-8 my-5">
    <h1 class="h2 mb-4 fw-bold">Register</h1>
    <form action={{url('/register')}} method="post">
        @csrf
        <div class="d-flex gap-5 mb-3">
            <div class="form-group w-50">
                <label class="fw-bold" for="first_name">First name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter first name">
            </div>
            <div class="form-group w-50">
                <label class="fw-bold" for="last_name">Last name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name">
            </div>
        </div>
        <div class="form-group mb-3">
            <label class="fw-bold" for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email">
        </div>
        <div class="form-group mb-3">
            <label class="fw-bold" for="role">Role</label>
            <select class="form-control" id="role">
                <option>Select role</option>
                <option value="0">Admin</option>
                <option value="1">User</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label class="fw-bold" for="gender">Gender</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                <label class="form-check-label" for="female">Female</label>
            </div>
        </div>
        <div class="form-group mb-3">
            <label class="fw-bold me-5" for="displayPicture">Display Picture</label>
            <input type="file" class="form-control-file" id="display_picture">
        </div>
        <div class="form-group mb-3">
            <label class="fw-bold" for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
        </div>
        <div class="form-group mb-3">
            <label class="fw-bold" for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm password">
        </div>

        <a class="btn btn-link p-0 mb-3" href="/login">
            Already have an account? Click here to login
        </a>

        <div class="">
            <button type="submit" class="btn btn-primary">Submit</button>

        </div>
        
    </form>
</div>
@endsection