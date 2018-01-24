@extends('layouts.main')
@section('title')
    Shop - Registration
@endsection
@section('head')
@endsection
@section('body')
    @include('partials._navbar', ['title' => 'Pendaftaran', 'url' => '/auth/register'])
    <div class="pad10"></div>
    <div class="pad15">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{url('auth/register-next')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="email" value="{{$data->email}}">
                        <input type="hidden" name="username" value="{{$data->username}}">
                        <input type="hidden" name="password" value="{{$data->password}}">
                        <div class="form-group">
                            <label for="ktp">No. KTP</label>
                            <input type="text" name="ktp" class="form-control text-input" id="ktp" maxlength="16" required>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto Anda</label>
                            <input type="file" name="foto" class="form-control text-input" id="foto" required>
                        </div>
                        <div class="form-group">
                            <label for="foto_ktp">Foto KTP</label>
                            <input type="file" name="foto_ktp" class="form-control text-input" id="foto_ktp" required>
                        </div>
                        <div class="form-group">
                            <div class="pad10"></div>
                            @include('partials._footer', ['title' => 'Kirimkan'])
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('foot')
@endsection

