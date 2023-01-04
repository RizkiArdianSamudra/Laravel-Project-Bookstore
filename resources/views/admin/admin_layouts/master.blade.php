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
        .navLink2.aktif{
            text-decoration: underline;
        }
    </style>
</head>
<body>

    @include('admin.admin_layouts.header')

    @yield('content')

    @include('admin.admin_layouts.footer')

</body>
</html>