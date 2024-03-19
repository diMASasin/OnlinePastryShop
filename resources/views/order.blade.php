<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>605-01</title>
</head>
<body>
<h2>{{$order ? "Список товаров заказа № ".$order->id : 'Неверный ID заказа' }}</h2>
@if($order)
    <table border="1">
        <tr>
            <td>id</td>
            <td>Наименование</td>
            <td>Цена</td>
            <td>Количество</td>
        </tr>
        @foreach ($order->cakes as $cake)
            <tr>
                <td>{{$cake->id}}</td>
                <td>{{$cake->name}}</td>
                <td>{{$cake->pivot->one_cake_price}}</td>
                <td>{{$cake->pivot->amount}}</td>
            </tr>
        @endforeach
    </table>
@endif
    <h2>Итого: {{$total->total}}</h2>
</body>
</html>
