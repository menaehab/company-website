@php
    $dir = LaravelLocalization::getCurrentLocale() == 'ar' ? 'rtl'  : '';
@endphp
<!doctype html>
<html lang="en">
@include('admin.auth.partials.head')
    <body class="light {{ $dir }}">
        @yield('content')
        @include('admin.auth.partials.footer')
    </body>
</html>
