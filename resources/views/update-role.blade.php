@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="h2 mb-4 fw-bold">John Doe</h1>
    <form action={{ url('/update-role') }} method="post">
        <div class="form-group">
            <label for="role">Role</label>
            <select class="form-control" id="role">
                <option>Select role</option>
                <option value="0">Admin</option>
                <option value="1" selected>User</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Save</button>
    </form>
</div>
@endsection