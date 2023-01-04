<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .navLink.aktif{
            background-color: white;
            color: rgb(7 89 133);
        }
    </style>
</head>
<body>

    @include('user.user_layouts.header')

    @yield('content')

    @include('user.user_layouts.footer')

</body>
</html>