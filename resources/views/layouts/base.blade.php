<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @yield('csslist');
</head>
<!-- <body>
    <div id="app">
        @yield('content')
    </div>
</body> -->
@yield('content');
@yield('jslist');
</html>