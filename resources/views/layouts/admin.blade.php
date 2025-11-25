<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Practica</title>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};
    </script>
</head>
    <body>
        
        <main>

            @yield('content')

        </main>

    </body>
</html>