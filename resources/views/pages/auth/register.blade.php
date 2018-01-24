@extends('layouts.main')
@section('title')
    Shop - Register
@endsection
@section('head')
@endsection
@section('body')
    @include('partials._navbar', ['title' => 'Register', 'url' => '/'])
    <div class="pad10"></div>
    <div class="pad15">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{url('auth/register')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control text-input" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control text-input" id="username"
                                   minlength="6" maxlength="15" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control text-input" minlength="8"
                                   maxlength="16" id="password" required>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" class="form-control text-input"
                                   minlength="8" maxlength="16" id="password_confirmation" required>
                        </div>
                        <div class="form-group">
                            <div class="pad10"></div>
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('foot')
@endsection

