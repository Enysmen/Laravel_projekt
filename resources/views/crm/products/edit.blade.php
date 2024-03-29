@extends('crm.layouts.app')

@section('content')
    <h2 class="mb-4">Tworzenie produktu </h2>
    <form action="{{route('product.update', $product)}}" style="max-width: 600px;" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="formFile" class="form-label">Nazwa</label>
            <input class="form-control" type="text" name="name" value="{{$product->name}}">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Kategoria</label>
            <select name="category_id" class="form-control" id="">
                @foreach($categories as $category)
                    @if($category->id == $product->category()->value('id'))
                        <option value="{{$category->id}}" selected>{{$category->name}}</option>
                    @else
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endif

                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Ilość</label>
            <input class="form-control" type="text" name="count" value="{{$product->count}}">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Koszt</label>
            <input class="form-control" type="text" name="self_cost" value="{{$product->self_cost}}">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Koszt</label>
            <input class="form-control" type="text" name="cost" value="{{$product->cost}}">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Obraz</label>
            <input class="form-control" type="file" id="formFile" name="file">
        </div>
        <div class="mb-3">
            <img src="{{asset('storage/'.$product->image)}}" width="100" alt="">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Tworzyć</button>
        </div>
    </form>

@endsection
