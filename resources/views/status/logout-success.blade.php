@extends('layouts.app')

@section('content')
<div class="container col-md-12 d-flex align-items-center" style="height: 50vh">
    <div>
        <h1 class="fw-bold">@lang('words.logout_success')</h1>
        <p class="fs-5">@lang('words.you_have_logged_out')</p>
        <div class="d-flex gap-3 pt-2">
            <a href={{ url(app()->getLocale().'/') }} class="btn btn-primary">@lang('ui.home')</a>
        </div>
    </div>
</div>
@endsection
