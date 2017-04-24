<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ trans('messages.title.common') }} | @yield('title')</title>

    <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/custom.css')}}" rel="stylesheet">
    @yield('extend-css')
</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    @yield('content')
</div>

<!-- Mainly scripts -->
<script src="{{url('assets/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
@yield('extend-js')
</body>

</html>
