@extends('layouts.main')
@section('title')
    Shop - Login
@endsection
@section('head')
@endsection
@section('body')
    @include('partials._navbar', ['title' => 'Login', 'url' => '/'])
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('auth/login')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" minlength="6" maxlength="15">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('foot')
@endsection

