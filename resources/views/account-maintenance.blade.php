@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="h2 mb-4 fw-bold">@lang('ui.account_maintenance')</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>@lang('authentication.name')</th>
                <th>@lang('authentication.role')</th>
                <th>@lang('ui.actions')</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John Doe</td>
                <td>Admin</td>
                <td>
                    <a href="#" class="btn btn-primary mr-2">@lang('ui.update_role')</a>
                    <a href="#" class="btn btn-danger">@lang('ui.delete')</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection