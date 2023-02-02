@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="h2 mb-4 fw-bold">Shopping Cart</h1>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>Item</th>
                <th>Price</th>
                <th>Total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($cart as $item) --}}
                <tr>
                    <td>image</td>
                    <td>Vegetable</td>
                    <td>Rp 250.000</td>
                    <td>
                        <a href="#" class="btn btn-danger">Remove</a>
                    </td>
                </tr>
        </tbody>
    </table>

    <p class="h5 fw-bold mt-5 mb-3">Total: Rp 250.000</p>
    <a href="#" class="btn btn-primary float-right">Checkout</a>
</div>
@endsection