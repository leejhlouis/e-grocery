@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div>
        <h1 class="h2 mb-4 fw-bold">Products</h1>
            <div class="row">
                @for ($i = 0; $i < 12; $i++)
                    <div class="col-sm-6 col-lg-3 py-3">
                        <div class="card border-0 shadow rounded-18">
                            <div class="card-body">
                                <h5 class="card-title">Product {{ $i + 1 }}</h5>
                                <a href="{{ url('/products/'.$i) }}" class="btn btn-primary">Details</a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <nav class="d-flex justify-content-center mt-4" aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">Previous</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
    </div>
</div>
@endsection
