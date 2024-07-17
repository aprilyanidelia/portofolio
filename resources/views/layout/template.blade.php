<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('layout.top.css')
    @include('layout.top.js')
</head>
<body>
    @include('layout.nav')
    <section class="container mx-auto px-3">
    @yield('header')
    @yield('main')
    </section>
    @include('layout.bottom.js')
</body>
</html>