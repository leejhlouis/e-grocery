@extends('layouts.app')

@section('title')
    @lang('ui.account_maintenance') | Amazing E-Grocery
@endsection

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
            @forelse ($accounts as $account)
                <tr>
                    <td>{{ $account->first_name." ".$account->last_name }}</td>
                    <td>{{ $account->role->role_name }}</td>
                    <td class="d-flex gap-2">
                        <a href="{{ url(app()->getLocale().'/accounts/update/'.$account->id) }}" class="btn btn-primary mr-2">@lang('ui.update_role')</a>
                        <form action="{{ url(app()->getLocale().'/accounts/delete/'.$account->id) }}" method="post">
                            @csrf
                            <button class="btn btn-danger">@lang('ui.delete')</button>
                        </form>
                    </td>
                </tr>
            @empty
                <td colspan="4" class="text-center">@lang('ui.empty')</td>
            @endforelse
            
        </tbody>
    </table>
</div>
@endsection