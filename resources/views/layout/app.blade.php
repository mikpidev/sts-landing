<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STS</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Devicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">

    <!-- Lineicons -->
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">

    <!-- AyroUI -->
    <link rel="stylesheet" href="https://cdn.ayroui.com/1.0/css/starter.css">

    <!-- Tu CSS -->
    <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">



</head>

<body>

    <header>
        <!-- Call navbar.blade.php -->
        @include('partials.navbar')


    </header>

    <main>

        <!-- Contenido principal -->
        <div class="flex-grow-1">
            @yield('content')
        </div>
    </main>






    <footer>

        <section id="contact-us">
            @include('partials.contact-us')
        </section>
        <!-- Call navbar.blade.php -->
        @include('partials.footer')
    </footer>

    @yield('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">

    </script>
</body>


</html>