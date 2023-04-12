@extends('crm.layouts.app')

@section('content')
<h2 class="mb-4">Kategoria </h2>
<a href="{{route('category.create')}}" type="button" class="btn btn-primary mb-4">Tworzyć</a>
<table class="table">
    <tbody>
    @foreach($categories as $category)
    <tr>
        <th scope="row">{{$category->id}}</th>
        <td><img src="{{asset('storage/'.$category->image)}}" width="50" alt=""></td>
        <td>{{$category->name}}</td>
        <td>
            <a href="{{route('category.edit', $category)}}" type="button" class="btn btn-primary">Redagować</a>
            <form action="{{route('category.destroy', $category)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn secondary">Usunąć</button>
            </form>

        </td>

    </tr>
    @endforeach
    </tbody>
</table>
@endsection
