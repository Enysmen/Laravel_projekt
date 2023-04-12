@extends('crm.layouts.app')

@section('content')

<h2 class="mb-4">Tworzenie kategorii </h2>
<form action="{{route('category.store')}}" method="post" style="max-width: 600px;" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="formFile" class="form-label">Nazwa</label>
        <input class="form-control" type="text" name="name">
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
