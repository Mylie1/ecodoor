<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/libs/bootstrap.min.css') }}">
    <!-- Fontes -->
    <link href="https://fonts.googleapis.com/css?family=Caladea|Montserrat&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css">
    <title>ECODOOR</title>
</head>

<body>
    <!-- Navbar -->
    @include('website.partials.navbar')

    <main>
        @yield('main')
    </main>

    <!-- Footer -->
    @include('website.partials.footer')

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="{{ asset('js/libs/bootstrap.min.js') }}"></script>
</body>

</html>