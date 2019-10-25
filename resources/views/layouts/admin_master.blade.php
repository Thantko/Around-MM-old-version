<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    @yield("title_meta")
    <title>PeacockMoon Travel and Tour</title>
    @include('layouts.includes.header')
    @yield('css')
</head>
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

@include('layouts.includes.admin_nav')

@yield('content')

@yield('script')
<script src="{{ URL::asset('app-assets/js/app-menu.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('app-assets/js/app.js') }}" type="text/javascript"></script>
</body>
</html>