@extends('layouts.main')
@section('title')
    Shop - My Account
@endsection
@section('head')
@endsection
@section('body')
    <h3>Welcome Back, {{Auth::User()->username}}</h3><br>
    <a href="{{url('auth/logout')}}">Logout</a>
@endsection
@section('foot')
@endsection

