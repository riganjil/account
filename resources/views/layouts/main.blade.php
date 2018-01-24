<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/app.css')}}">

    <title>@yield('title')</title>
    @yield('head')
</head>
<body>
@yield('body')
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{url('js/jquery-3.2.1.slim.min.js')}}"></script>
<script src="{{url('js/popper.min.js')}}"></script>
<script src="{{url('bootstrap/js/bootstrap.min.js')}}"></script>
@yield('foot')
</body>
</html>