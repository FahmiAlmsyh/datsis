<!DOCTYPE html>
<html lang="en">

@include('components.head')
@stack('head')

<body id="page-top">
    @yield('main')


    @include('components.script')
    @stack('script')

</body>

</html>
