@extends('layouts.main')
@section('title')
    Shop - Login
@endsection
@section('head')
@endsection
@section('body')
    @include('partials._navbar', ['title' => 'Login', 'url' => '/'])
    <div class="pad10"></div>
    <div class="pad15">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{url('auth/login')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="user">Username</label>
                            <input type="text" name="username" class="form-control text-input" id="user" minlength="6" maxlength="15">
                        </div>
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" name="password" class="form-control text-input" id="pass" minlength="8" maxlength="16" required>
                        </div>
                        <div class="form-group">
                            <div class="pad10"></div>
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('foot')
@endsection

