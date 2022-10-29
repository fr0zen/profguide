<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="icon" type="image/png" href="/images/favicon.png">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css/static/2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <meta name="csrf-token" value="{{ csrf_token() }}" />

    <title>PROFGUIDE - Демо</title>

    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />

</head>
<body class="page disableEvent">
    <div id="app"></div>
    <script src="{{ mix('js/appdemo.js') }}" type="text/javascript"></script>

</body>

</html>

