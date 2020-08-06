<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Pusher-App</title>
</head>

<body>

    @yield('content')


    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/pusher.min.js') }}"></script>
    @yield('script')
</body>

</html>
