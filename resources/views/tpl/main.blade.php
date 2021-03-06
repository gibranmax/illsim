<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Illness Simulator">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script>
            window.Laravel = { csrfToken: '{{ csrf_token() }}' };
        </script>

        <title>@yield('title')</title>

        <!-- Styles -->
        <link media="all" type="text/css" rel="stylesheet" href="/css/app.css">
    </head>

    <body>
        <div id="app">
            @yield('content')
        </div>
    </body>

    <!-- Scripts -->
    <script src="/js/app.js"></script>

</html>
