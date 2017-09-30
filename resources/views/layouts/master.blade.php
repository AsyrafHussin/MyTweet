<!DOCTYPE html>
<html>
<head>
    <title>MyTweet | {{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    @yield("navigation")

    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>