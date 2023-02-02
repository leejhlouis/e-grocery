@extends('layouts.app')

@section('content')
<div class="container col-md-12 d-flex align-items-center" style="height: 50vh">
    <div>
        <h1 class="fw-bold">Find and buy your groceries here!</h1>
        <p class="fs-5">We provide specialized groceries for you and bring them straight to your home.</p>
        <div class="d-flex gap-3 pt-2">
            <a href={{ url('/login') }} class="btn btn-primary">Login</a>
            <a href={{ url('/register') }} class="btn btn-secondary">Register</a>
        </div>
    </div>
</div>
@endsection
