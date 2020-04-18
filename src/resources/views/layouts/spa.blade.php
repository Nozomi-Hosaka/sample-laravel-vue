<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@yield('head')

<body>
<div id="app">
    @yield('content')
</div>
</body>

@yield('script')

</html>
