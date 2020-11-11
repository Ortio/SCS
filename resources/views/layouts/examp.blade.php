<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}" />
    <title>Document</title>
</head>
<body>
<div class="main" id="content-vue">
    <app-component :data='@json($data)' />
</div>

<script src="/js/manifest.js"></script>
<script src="/js/vendor.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
