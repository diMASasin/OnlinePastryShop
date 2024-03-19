<! doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>605-01</title>
    <style> .is-invalid {
            color: #ff0000;
        }</style>
</head>
<body>
<h2>Добавление товара</h2>
<form method="post" action={{url('cake')}}>
    @csrf <label>Наименование</label>
    <input type="text" name="name" value="{{ old ('name' ) }}"/>
    @error('name')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <label>Цена</label>
    <input type="text" name="price" value="{{ old( 'price' ) }}"/>
    @error('price')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <label>Категория: </label>
    <select name="category_id" value="{{ old ('category_id' ) }}">
        <option style=". . . ">
        @foreach ($categories as $category)
            <option value="{{$category->id}}"
                    @if(old('category_id') == $category->id) selected
                @endif>{{$category->name}} </option>
        @endforeach
    </select>
    @error('category_id' )
    <div class="is-invalid">{{ $message }}</div>
    @enderror <br>
    <label>Вес</label>
    <input type="text" name="weight" value="{{ old ('weight' ) }}"/><br>
    @error('weight')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <label>Описание</label>
    <input type="text" name="description" value="{{ old ('description') }}"/><br>
    @error('description')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <label>Наполнение</label>
    <input type="text" name="filling_id" value="{{ old ('filling_id') }}"/><br>
    @error('filling_id')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <label>Тип</label>
    <input type="text" name="type_id" value="{{ old ('type_id') }}"/><br>
    @error('type_id')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <input type="submit">
</form>
</body>
</html>
