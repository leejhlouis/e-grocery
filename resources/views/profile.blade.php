@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="h2 mb-4 fw-bold">Profile</h1>
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset('product.jpg') }}" alt="Product Image" class="img-fluid">
        </div>
        <div class="col-md-8">
            <form action={{url('/profile')}} method="post">
                @csrf
                <div class="d-flex gap-5 mb-3">
                    <div class="form-group w-50">
                        <label class="fw-bold" for="first_name">First name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter first name" value="John">
                    </div>
                    <div class="form-group w-50">
                        <label class="fw-bold" for="last_name">Last name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name" value="Matheson">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold" for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" value="john.matheson@mail.com">
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold" for="role">Role</label>
                    <select class="form-control" id="role">
                        <option>Select role</option>
                        <option value="0">Admin</option>
                        <option value="1" selected>User</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold" for="gender">Gender</label>
                    <select class="form-control" id="gender">
                        <option selected>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold me-5" for="displayPicture">Display Picture</label>
                    <input type="file" class="form-control-file" id="display_picture">
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold" for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" value="passwordencrypted">
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold" for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm password" value="passwordencrypted">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection