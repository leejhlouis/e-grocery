@extends('layouts.app')

@section('title')
    @lang('ui.register') | Amazing E-Grocery
@endsection

@section('content')
<div class="container col-md-8 my-5">
    <h1 class="h2 mb-4 fw-bold">@lang('ui.register')</h1>
    <form action={{url('/register')}} method="post" enctype="multipart/form-data">
        @csrf
        <div class="d-flex gap-5 mb-3">
            <div class="form-group w-50">
                <label class="fw-bold" for="first_name">@lang('authentication.first_name')</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="@lang('authentication.first_name')">
                @error('first_name')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="form-group w-50">
                <label class="fw-bold" for="last_name">@lang('authentication.last_name')</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="@lang('authentication.last_name')">
                @error('last_name')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>
        <div class="form-group mb-3">
            <label class="fw-bold" for="email">@lang('authentication.email')</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="@lang('authentication.email')">
            @error('email')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="fw-bold" for="role">@lang('authentication.role')</label>
            <select class="form-control" id="role" name="role">
                <option>@lang('ui.select_role')</option>
                <option value="1">@lang('authentication.admin')</option>
                <option value="2">@lang('authentication.user')</option>
            </select>
            @error('role')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="fw-bold" for="gender">@lang('authentication.gender')</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="male" value="1">
                <label class="form-check-label" for="male">@lang('authentication.male')</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="female" value="2">
                <label class="form-check-label" for="female">@lang('authentication.female')</label>
            </div>
            @error('gender')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="fw-bold me-5" for="displayPicture">@lang('authentication.display_picture')</label>
            <input type="file" class="form-control-file" id="display_picture" name="display_picture">
            @error('display_picture')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="fw-bold" for="password">@lang('authentication.password')</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="@lang('authentication.password')">
            @error('password')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="fw-bold" for="password_confirmation">@lang('ui.confirm_password')</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="@lang('ui.confirm_password')">
            @error('password_confirmation')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <a class="btn btn-link p-0 mb-3" href={{ url(app()->getLocale().'/login') }}>
            @lang('ui.already_have_account')
        </a>

        <div class="">
            <button type="submit" class="btn btn-primary">@lang('ui.submit')</button>
        </div>
        
    </form>
</div>
@endsection