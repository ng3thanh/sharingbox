<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sharing Box</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    {{--<link rel="shortcut icon" href="{{ asset('image/favicon.ico') }}" type="image/x-icon">--}}
    {{--<link rel="icon" href="{{ asset('image/favicon.ico') }}" type="image/x-icon">--}}
    @include('web.assets.css')
    @yield('css')
</head>

<body id="top">
    @include('web.partials.header')
    @yield('content')
    @include('web.partials.footer')
    @include('web.assets.js')
    @yield('script')
</body>
</html>
