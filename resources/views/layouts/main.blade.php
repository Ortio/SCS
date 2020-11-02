<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}" />
    @include('layouts.src')

    <title>Document</title>
</head>
<body>
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <section id="main-content">
                @yield('content')
            </div>
        </div>
    </div>
</div>


    <link rel="stylesheet" type="text/css" href="{{ asset('js/app.js') }}" />
</body>
</html>
