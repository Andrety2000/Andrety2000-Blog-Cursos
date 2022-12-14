<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- favicon -->
    <!-- estilos -->
    <style>

        .active{
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>

    @include('layouts.partials.header')
    @yield('content')
    @include('layouts.partials.footer')

</body>
</html>
