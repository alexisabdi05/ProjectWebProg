<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('Title')</title>
    <link rel="stylesheet" href=@yield('Style')>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="navbar-container">
        @include('layout/navbar')
    </div>
@yield('content')
</body>
</html>
