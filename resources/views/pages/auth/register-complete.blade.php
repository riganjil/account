@extends('layouts.main')
@section('title')
    Shop - Registration Complete
@endsection
@section('head')
@endsection
@section('body')
    @include('partials._navbar', ['title' => 'Registration Complete', 'url' => '/login'])
    <div class="pad10"></div>
    <div class="pad15">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Selamat, Pendaftaran telah berhasil</h3>
                    <a href="{{url('auth/login')}}">Silahkan login</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('foot')
    <script type="text/javascript">
        setTimeout(function () {
            window.location = "http://shopee.co.id";
        }, 5000);
    </script>
@endsection

