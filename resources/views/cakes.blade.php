<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>605-01</title>
</head>
<body>
<h2>Список товаров</h2>
<table border="1">
    <thead>
    <td>id</td>
    <td>Наименование</td>
    <td>Цена</td>
    <td>Категория</td>
    <td>Действия</td>
    </thead>
    <tbody>
    @foreach($cakes as $cake)
        <tr>
            <td>{{$cake->id}}</td>
            <td>{{$cake->name}}</td>
            <td>{{$cake->price}}</td>
            <td>{{$cake->category->name}}</td>
            <td>
                <a href="{{url('cake/destroy/'.$cake->id)}}">Удалить</a>
                <a href="{{url('cake/edit/'.$cake->id)}}">Редактировать</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
