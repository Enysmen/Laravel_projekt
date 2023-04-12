@extends('crm.layouts.app')

@section('content')
<h2 class="mb-4">Tworzenie produktu </h2>
<form action="{{route('product.store')}}" style="max-width: 600px;" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="formFile" class="form-label">Nazwa</label>
        <input class="form-control" type="text" name="name">
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Kategoria</label>
        <select name="category_id" class="form-control" id="">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Ilość</label>
        <input class="form-control" type="text" name="count">
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Koszt</label>
        <input class="form-control" type="text" name="self_cost">
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Koszt</label>
        <input class="form-control" type="text" name="cost">
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Obraz</label>
        <input class="form-control" type="file" id="formFile" name="file">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Tworzyć</button>
    </div>
</form>

@endsection
