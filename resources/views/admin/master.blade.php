@php
    $dir = LaravelLocalization::getCurrentLocale() == 'ar' ? 'rtl' : '';
@endphp
<!doctype html>
<html lang="en">
@include('admin.partials.head')

<body class="vertical  light  {{ $dir }}">
    <div class="wrapper">
        <main role="main" class="main-content">
            @include('admin.partials.navbar')
            @include('admin.partials.sidebar')
            @yield('content')
        </main> <!-- main -->
    </div> <!-- .wrapper -->
    @include('admin.partials.script')
    <script>
        function confirmDelete(id) {
            if (confirm("{{ __('keywords.delete_confirmation') }}")) {
                document.getElementById('deleteForm-' + id).submit();
            }
        }
    </script>
</body>

</html>
