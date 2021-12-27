<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.head')
    @yield('head')
</head>
<body>
<div id="app">

    @include('layouts.partials.navbar')

    <div>
        @yield('content')
    </div>

    @include('layouts.partials.footer')

</div>
@include('layouts.partials.js')
</body>
</html>
