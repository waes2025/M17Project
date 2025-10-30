<!DOCTYPE html>
<html lang="en">
<head>
    
    @include('layout.partials.header')

</head>
<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        @include('layout.partials.navbar')

        @yield('content')
    </main>

    @include('layout.partials.footer')
</body>
</html>