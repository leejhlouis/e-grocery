@extends('layouts.app')

@section('content')
<div class="container col-md-12 d-flex align-items-center" style="height: 50vh">
    <div>
        <h1 class="fw-bold">Saved!</h1>
        <p class="fs-5">Your changes have been saved.</p>
        <div class="d-flex gap-3 pt-2">
            <a href={{ url('/login') }} class="btn btn-primary">Click Here to Home</a>
        </div>
    </div>
</div>
@endsection
