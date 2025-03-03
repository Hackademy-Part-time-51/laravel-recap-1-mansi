<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recap</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    {{ $custom_top ?? '' }}
    <x-navbar />
    {{ $slot }}



    {{ $custom_bottom ?? '' }}
</body>

</html>
