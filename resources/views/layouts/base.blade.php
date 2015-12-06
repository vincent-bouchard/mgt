<!DOCTYPE html>
<html lang='fr'>
    <head>
        <title></title>
        <script src="assets/js/plugins.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/plugins.css">
        <link rel="stylesheet" type="text/css" href="assets/css/app.css">
    </head>

    <body class="{!! !empty($body->class) ? $body->class : '' !!}">
        @yield('content')
    </body>
</html>
