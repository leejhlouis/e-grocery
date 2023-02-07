@extends('layouts.app')

@section('title')
    @lang('ui.update_role') | Amazing E-Grocery
@endsection

@section('content')
<div class="container col-md-6 my-5">
    <h1 class="h2 mb-4 fw-bold">{{ $account->first_name." ".$account->last_name }}</h1>
    <form action={{ url(app()->getLocale().'/accounts/update/'.$account->id) }} method="post">
        @csrf
        <div class="form-group">
            <label for="role">@lang('authentication.role')</label>
            <select class="form-control" name="role" id="role">
                <option>@lang('ui.select_role')</option>
                <option value="1" @if($account->role_id == 1) selected @endif>
                    @lang('authentication.user')
                </option>
                <option value="2" @if($account->role_id == 2) selected @endif>
                    @lang('authentication.admin')
                </option>
            </select>
            @error('role')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-4">@lang('ui.save')</button>
    </form>
</div>
@endsection