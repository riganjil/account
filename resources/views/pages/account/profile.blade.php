@extends('layouts.main')
@section('title')
    Shop - My Profile
@endsection
@section('head')
@endsection
@section('body')
    @include('partials._navbar', ['title' => 'My Profile', 'url' => '/account'])
    <div class="pad10"></div>
    <div class="pad15">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Welcome Back, {{Auth::User()->username}}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="{{url('account/logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('foot')
@endsection

