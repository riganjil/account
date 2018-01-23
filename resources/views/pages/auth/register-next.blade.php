@extends('layouts.main')
@section('title')
    Shop - Finish Registration
@endsection
@section('head')
@endsection
@section('body')
    @include('partials._navbar', ['title' => 'Register', 'url' => '/'])
    {{$data->username}}
@endsection
@section('foot')
@endsection

