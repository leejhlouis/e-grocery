@extends('layouts.app')

@section('content')
<div class="container col-md-12 d-flex align-items-center" style="height: 50vh">
    <div>
        <h1 class="fw-bold">@lang('words.tagline')</h1>
        <p class="fs-5">@lang('words.desc')</p>

        <div class="d-flex gap-3 pt-2">
            <a href={{ url(app()->getLocale().'/login') }} class="btn btn-primary">@lang('ui.login')</a>
            <a href={{ url(app()->getLocale().'/register') }} class="btn btn-secondary">@lang('ui.register')</a>
        </div>
    </div>
</div>
@endsection
