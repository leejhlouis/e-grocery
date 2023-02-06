@extends('layouts.app')

@section('title')
    @lang('ui.details') | Amazing E-Grocery
@endsection

@section('content')
<div class="container my-5">
    <h1 class="h2 fw-bold mb-5">{{ $item->item_name }}</h1>
    <div class="row">
        <div class="col-md-4">
            <img class="w-100 pe-5" src="/storage/pictures/grocery.jpg" alt="Product Image" class="img-fluid">
        </div>
        <div class="col-md-8">
            <p class="fw-bold h5 mb-4">@lang('ui.price'): Rp {{ $item->price }}</p>
            <p class="fw-bold h5">@lang('ui.description')</p>
            <p>{{ $item->item_desc }}</p>
            <a href="{{ url('/cart/add/'.$item->id) }}" class="btn btn-primary">@lang('ui.buy')</a>
        </div>
    </div>
</div>
@endsection
