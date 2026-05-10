<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body style="
    font-family: Tahoma, sans-serif !important;
    background: url('/images/bg-snoopy.jpg') no-repeat center center fixed;
    background-size: cover;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
">

    <!-- HEADER -->
    @include('common.header')

    <!-- CONTENT -->
    <main style="flex: 1;">
        @yield('content')
    </main>

    <!-- FOOTER -->
    @include('common.footer')

</body>
</html>