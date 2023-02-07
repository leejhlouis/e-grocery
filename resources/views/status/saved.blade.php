@extends('layouts.app')

@section('content')
<div class="container col-md-12 d-flex align-items-center" style="height: 50vh">
    <div>
        <h1 class="fw-bold">@lang('words.saved')</h1>
        <p class="fs-5">@lang('words.your_changes_saved')</p>
        <div class="d-flex gap-3 pt-2">
            <a href={{ url(app()->getLocale().'/') }} class="btn btn-primary">@lang('ui.home')</a>
        </div>
    </div>
</div>
@endsection
