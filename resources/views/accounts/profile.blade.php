@extends('layouts.app')

@section('title')
    @lang('ui.profile') | Amazing E-Grocery
@endsection

@section('content')
<div class="container my-5">
    <h1 class="h2 mb-4 fw-bold">@lang('ui.profile')</h1>
    <div class="row justify-content-between">
        <div class="col-md-3">
            <img src="{{ asset(Auth::user()->display_picture_link) }}" alt="Product Image" class="img-fluid">
        </div>
        <div class="col-md-8">
            <form action={{url(app()->getLocale().'/profile')}} method="post" enctype="multipart/form-data">
                @csrf
                <div class="d-flex gap-5 mb-3">
                    <div class="form-group w-50">
                        <label class="fw-bold" for="first_name">@lang('authentication.first_name')</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="@lang('authentication.first_name')" value="{{ Auth::user()->first_name }}">
                        @error('first_name')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="form-group w-50">
                        <label class="fw-bold" for="last_name">@lang('authentication.last_name')</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="@lang('authentication.last_name')" value="{{ Auth::user()->last_name }}">
                        @error('last_name')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold" for="email">@lang('authentication.email')</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="@lang('authentication.email')" value="{{ Auth::user()->email }}">
                    @error('email')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold" for="role">@lang('authentication.role')</label>
                    <select class="form-control" name="role" id="role">
                        <option>@lang('ui.select_role')</option>
                        <option value="1" @if(Auth::user()->role_id == 1) selected @endif>
                            @lang('authentication.user')
                        </option>
                        <option value="2" @if(Auth::user()->role_id == 2) selected @endif>
                            @lang('authentication.admin')
                        </option>
                    </select>
                    @error('role')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold" for="gender">@lang('authentication.gender')</label>
                    <select class="form-control" name="gender" id="gender">
                        <option value="1" @if(Auth::user()->gender_id == 1) selected @endif>@lang('authentication.male')</option>
                        <option value="2" @if(Auth::user()->gender_id == 2) selected @endif>@lang('authentication.female')</option>
                    </select>
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
                    <input type="password" class="form-control" id="password" name="password" placeholder="@lang('authentication.password')" value="">
                    @error('password')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold" for="password_confirmation">@lang('ui.confirm_password')</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="@lang('ui.confirm_password')" value="">
                    @error('password_confirmation')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">@lang('ui.save')</button>
            </form>
        </div>
    </div>
</div>
@endsection