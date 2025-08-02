<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sarakari-Result</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body  class="max-w-7xl mx-auto shadow-md bg-white">

    @include('component.header')

    <div >@yield('content')</div>

    @include('component.footer')

</body>
</html>
