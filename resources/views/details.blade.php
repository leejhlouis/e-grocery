@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="h2 fw-bold mb-5">Product Title</h1>
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset('product.jpg') }}" alt="Product Image" class="img-fluid">
        </div>
        <div class="col-md-8">
            <p class="fw-bold h5 mb-4">@lang('ui.price'): $100</p>
            <p class="fw-bold h5">@lang('ui.description')</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent euismod, sem euismod congue commodo, risus nisi euismod nisi, vitae tempor nisi ante vel nisi. In vel sem quis velit congue suscipit non eu ipsum. Sed non mauris non tellus fringilla fringilla eu at enim. Duis ac pellentesque magna, id egestas odio. Aliquam erat volutpat. Sed accumsan, magna et congue rhoncus, libero sem bibendum ipsum, quis hendrerit purus sem vel magna.</p>
            <a href="#" class="btn btn-primary">@lang('ui.buy')</a>
        </div>
    </div>
</div>
@endsection
