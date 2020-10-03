<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table>
    @foreach($items as $item)
           <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->sale_type}}</td>
            <td>{{$item->delivery_type}}</td>
            <td>{{$item->store}}</td>
            <td>{{$item->sale_date}}</td>
        </tr>
    @endforeach

</table>



</body>
</html>
