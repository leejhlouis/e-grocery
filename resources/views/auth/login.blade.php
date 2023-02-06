@extends('layouts.app')

@section('title')
    @lang('ui.login') | Amazing E-Grocery
@endsection

@section('content')
<div class="container col-md-6 my-5">
    <h1 class="h2 mb-4 fw-bold">@lang('ui.login')</h1>
    <form action={{ url('/login') }} method="post">
        @csrf
        @error("authError")
            <p class="alert alert-danger">
                {{ $message }}
            </p>
        @enderror
        <div class="form-group mb-3">
            <label class="fw-bold" for="email">@lang('authentication.email')</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="@lang('authentication.email')">
        </div>
        <div class="form-group mb-4">
            <label class="fw-bold" for="password">@lang('authentication.password')</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="@lang('authentication.password')">
        </div>
        <div class="d-flex align-items-center">
            <button type="submit" class="btn btn-primary">@lang('ui.submit')</button>
            <a class="btn btn-link" href={{ url(app()->getLocale().'/register ') }}>
                @lang('ui.dont_have_account')
            </a>
        </div>
    </form>
</div>
@endsection