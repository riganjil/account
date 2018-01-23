@extends('layouts.main')
@section('title')
    Shop - Register
@endsection
@section('head')
@endsection
@section('body')
    @include('partials._navbar', ['title' => 'Register', 'url' => '/'])
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('auth/register')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input type="text" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <label for="password">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('foot')
@endsection

