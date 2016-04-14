<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Scistats</title>

    <!-- Styles -->
    <link href="{{ elixir('css/all.css') }}" rel="stylesheet">

</head>
<body id="app-layout">
@yield('content')

<!-- JavaScripts -->
<script src="{{ elixir('js/all.js') }}"></script>
@yield('scripts')
</body>
</html>
