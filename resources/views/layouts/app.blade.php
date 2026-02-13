<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Alfasoft')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    @if (Auth::check())
        @include('partials.header')
    @endif

    <main class="container">
        @yield('content')
    </main>

    @if (Auth::check())
        @include('partials.footer')
    @endif

</body>
</html>