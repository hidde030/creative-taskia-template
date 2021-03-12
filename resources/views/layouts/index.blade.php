<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url()->asset('/css/app.css') }}">
</head>

<body>
@include('includes.header')

<main>
    @yield('content')
</main>
<script defer src="js/app.js"></script>
</body>

</html>
