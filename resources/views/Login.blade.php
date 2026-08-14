@extends('master')
@section('content')
<div class="container Custom-login">
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <form action="/login" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Login</button>
            </form>
        </div>
    </div>
@endsection