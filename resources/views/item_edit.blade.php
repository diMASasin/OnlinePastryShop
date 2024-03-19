<! doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>605-01</title>
    <style> .is-invalid {
            color: red;
        } </style>
</head>
<body>
<h2>Редактирование товара</h2>
<form method="post" action={{url('cake/update/' .$cake->id) }}/>
    @csrf
    <label>Наименование</label>
    <input type="text" name="name" value="@if (old('name')) {{old('name' )}} @else {{$cake->name}} @endif"/><br>
    @error('name')
        <div class="is-invalid">{{ $message }}</div>
    @enderror
    <label>Цена</label>
    <input type="text" name="price" value="@if (old('name')) {{old('price')}} @else {{$cake->price}} @endif "/><br>
    @error('price')
        <div class="is-invalid">{{ $message }}</div>
    @enderror
    <label>Категория:</label>
    <select name="category_id" value="{{old('category_id')}}">
        <option style="...">
        @foreach ($categories as $category)
            <option value="{{$category->id}}"
                    @if(old('category_id'))
                        @if(old('category_id') == $category->id) selected @endif
                    @else
                        @if($cake->category_id == $category->id) selected @endif
                @endif>{{$category->name}} </option>
        @endforeach
    </select><br>
@error('category_id')
    <div class="is-invalid">{{ $message }}</div>
@enderror
    <label>Вес</label>
    <input type="text" name="weight" value="@if (old('weight')) {{old('weight')}} @else {{$cake->weight}} @endif "/><br>
    <label>Описание</label>
    <input type="text" name="description" value="@if (old('description')) {{old('description')}} @else {{$cake->description}} @endif "/><br>
    <label>Наполнение</label>
    <input type="text" name="filling_id" value="@if (old('filling_id')) {{old('filling_id')}} @else {{$cake->filling_id}} @endif "/><br>
    <label>Тип</label>
    <input type="text" name="type_id" value="@if (old('type_id')) {{old('type_id')}} @else {{$cake->type_id}} @endif "/><br>
<br>
    <input type="submit">
</body>
</html>
