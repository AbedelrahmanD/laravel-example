<!DOCTYPE html>
<html lang="{{ Config::get('lang') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/common.css") }}">
    <link rel="stylesheet" href="{{ asset("css/bootstrap_".Config::get("dirc").".min.css") }}">
    <script src="{{ asset("js/jquery.min.js") }}"></script>
    <script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
</head>

<body dir="{{ Config::get('dirc') }}">

    @yield('body')

</body>

</html>
