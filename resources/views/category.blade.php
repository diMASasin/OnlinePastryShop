<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>{{$category ? "Список товаров категории ".$category->name : 'Неверный ID категории'}}</h2>
    @if($category)
        <table border="1">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Наименование</th>
                    <th>Цена</th>
                </tr>
            </thead>
            <tbody>
            @foreach($cakes as $cake)
                <tr>
                    <th>{{$cake->id}}</th>
                    <td>{{$cake->name}}</td>
                    <td>{{$cake->price}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
