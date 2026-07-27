<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STS</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!--====== Lineicons CSS as we are using this for icons ======-->
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <!--====== Bootstrap Icons as we are using this for icons ======-->


    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
    <!--====== Starter Style CSS to make components works ======-->
    <link rel="stylesheet" href="assets/css/starter.css" />

    <!--====== Bootstrap CSS ======-->
    <link
        rel="stylesheet"
        href="https://cdn.ayroui.com/1.0/css/bootstrap.min.css" />

    <!--====== Lineicons CSS ======-->
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet" />

    <!--====== Style css ======-->
    <link rel="stylesheet" href="https://cdn.ayroui.com/1.0/css/starter.css" />


    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">



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