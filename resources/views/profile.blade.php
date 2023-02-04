@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="h2 mb-4 fw-bold">@lang('ui.profile')</h1>
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset('product.jpg') }}" alt="Product Image" class="img-fluid">
        </div>
        <div class="col-md-8">
            <form action={{url('/profile')}} method="post">
                @csrf
                <div class="d-flex gap-5 mb-3">
                    <div class="form-group w-50">
                        <label class="fw-bold" for="first_name">@lang('authentication.first_name')</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="@lang('authentication.first_name')" value="John">
                    </div>
                    <div class="form-group w-50">
                        <label class="fw-bold" for="last_name">@lang('authentication.last_name')</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="@lang('authentication.last_name')" value="Matheson">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold" for="email">@lang('authentication.email')</label>
                    <input type="email" class="form-control" id="email" placeholder="@lang('authentication.email')" value="john.matheson@mail.com">
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold" for="role">@lang('authentication.role')</label>
                    <select class="form-control" id="role">
                        <option>@lang('ui.select_role')</option>
                        <option value="0">@lang('authentication.admin')</option>
                        <option value="1" selected>@lang('authentication.user')</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold" for="gender">@lang('authentication.gender')</label>
                    <select class="form-control" id="gender">
                        <option selected>@lang('authentication.male')</option>
                        <option>@lang('authentication.female')</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold me-5" for="displayPicture">@lang('authentication.display_picture')</label>
                    <input type="file" class="form-control-file" id="display_picture">
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold" for="password">@lang('authentication.password')</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="@lang('authentication.password')" value="passwordencrypted">
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold" for="password_confirmation">@lang('ui.confirm_password')</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="@lang('ui.confirm_password')" value="passwordencrypted">
                </div>
                <button type="submit" class="btn btn-primary">@lang('ui.save')</button>
            </form>
        </div>
    </div>
</div>
@endsection