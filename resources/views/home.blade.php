@extends('layouts.app')

@section('title')
    @lang('ui.home') | Amazing E-Grocery
@endsection

@section('content')
<div class="container mt-5">
    <div>
        <h1 class="h2 mb-4 fw-bold">@lang('ui.products')</h1>
        <div class="d-flex flex-wrap gap-2 justify-content-between">
            @foreach ($items as $item)
                <div class="col-sm-6 col-lg-2 d-lg-inline-flex flex-column">
                    <div class="card border-0 shadow rounded-18">
                        <div class="card-body">
                            <img class="w-100 px-4" src="/storage/pictures/grocery.jpg" alt="">
                            <p class="h5 fw-bold card-title">{{ $item->item_name }}</p>
                            <a href="{{ url(app()->getLocale().'/products/'.$item->id) }}" class="btn btn-primary">@lang('ui.details')</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <nav class="d-flex justify-content-center mt-4" aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="{{ $items->previousPageUrl() }}">@lang('pagination.previous')</a>
                </li>
                @for ($i = 1; $i <= $items->lastPage(); $i++)
                    <li class="page-item">
                        <a class="page-link" href="{{ $items->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item">
                    <a class="page-link" href="{{ $items->nextPageUrl() }}">@lang('pagination.next')</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
@endsection
