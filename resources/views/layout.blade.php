<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel')</title>
</head>
<body>
    <ul>
        <li><a href="/">Welcome</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/hello">Hello</a></li>
    </ul>
    @yield('content')
</body>
</html>
