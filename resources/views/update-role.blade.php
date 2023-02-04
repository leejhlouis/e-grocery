@extends('layouts.app')

@section('content')
<div class="container col-md-6 my-5">
    <h1 class="h2 mb-4 fw-bold">John Doe</h1>
    <form action={{ url('/update-role') }} method="post">
        <div class="form-group">
            <label for="role">@lang('authentication.role')</label>
            <select class="form-control" id="role">
                <option>@lang('ui.select_role')</option>
                <option value="0">@lang('authentication.admin')</option>
                <option value="1" selected>@lang('authentication.user')</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-4">@lang('ui.save')</button>
    </form>
</div>
@endsection