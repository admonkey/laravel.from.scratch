<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
        @yield('header')
    </head>
    <body>

      @yield('content')
      @yield('footer')

    </body>
</html>
