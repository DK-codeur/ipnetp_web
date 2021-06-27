<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials._head')

    <title>{{config('app.name')}} | @yield('title') </title>
</head>

<body>

    <div id="wrapper">
        @include('layouts.partials._topbar')
        @include('layouts.partials._lefside')

        @yield('content')

        @include('layouts.partials._footer')
        @include('flashy::message')
    </div>

</body>

</html>
