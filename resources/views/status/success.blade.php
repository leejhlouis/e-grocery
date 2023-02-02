@extends('layouts.app')

@section('content')
<div class="container col-md-12 d-flex align-items-center" style="height: 50vh">
    <div>
        <h1 class="fw-bold">Success!</h1>
        <p class="fs-5">We will contact you soon (1 x 24 hours).</p>
        <div class="d-flex gap-3 pt-2">
            <a href={{ url('/login') }} class="btn btn-primary">Click Here to Home</a>
        </div>
    </div>
</div>
@endsection
