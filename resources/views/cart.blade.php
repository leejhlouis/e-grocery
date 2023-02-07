@extends('layouts.app')

@section('title')
    @lang('ui.cart') | Amazing E-Grocery
@endsection

@section('content')
<div class="container my-5">
    <h1 class="h2 mb-4 fw-bold">@lang('ui.cart')</h1>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>@lang('ui.item')</th>
                <th>@lang('ui.price')</th>
                <th>@lang('ui.total')</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @php
                $total = 0;
            @endphp
                @forelse ($cart as $item)
                    <tr>
                        <td style="width: 120px;"><img class="w-100 pe-4" src="/storage/pictures/grocery.jpg" alt=""></td>
                        <td>{{ $item->item->item_name }}</td>
                        <td>Rp {{ $item->price }}</td>
                        <td>
                            <form action="{{ url(app()->getLocale().'/cart/delete/'.$item->id) }}" method="post">
                                @csrf
                                <button class="btn btn-danger">@lang('ui.remove')</button>
                            </form>
                        </td>
                        @php
                            $total += $item->price;
                        @endphp
                    @empty
                        <td colspan="5" class="text-center">@lang('ui.cart_empty')</td>
                    </tr>
                @endforelse
        </tbody>
    </table>

    @if ($total != 0)
        <p class="h5 fw-bold mt-5 mb-3">@lang('ui.total'): Rp {{ $total }}</p>
        <form action="{{ url(app()->getLocale().'/checkout') }}" method="post">
        @csrf
            <button class="btn btn-primary float-right">@lang('ui.checkout')</button>
        </form>
    @endif

</div>
@endsection