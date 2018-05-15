<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('web/images/icons/favicon.png') }}"/>
        @include('web.assets.css')
        @yield('css')
    </head>
    <body class="animsition">
        @include('web.partials.header')
        @yield('content')
        @include('web.partials.footer')
        @include('web.assets.js')
        @yield('script')
    </body>
</html>
