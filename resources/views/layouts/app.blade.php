<!DOCTYPE html>
<html">

@include('layouts.header')

<body>
    @yield('content')
</body>
@include('layouts.footer')
@yield('scripts')
    @yield('page-script')
</html>