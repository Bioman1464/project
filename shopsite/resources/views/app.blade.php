<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articles</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
    <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="app" class="container">
        @yield('content')
    </div>
    <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
</body>
</html>