@extends('crm.layouts.app')

@section('content')

    <h2 class="mb-4">Towar </h2>
    <a href="{{route('product.create')}}" type="button" class="btn btn-primary mb-4">Tworzyć</a>
    <table class="table">
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td><img src="{{asset('storage/'.$product->image)}}" width="50" alt=""></td>
                <td>{{$product->name}}</td>
                <td>{{$product->category->name}}</td>
                <td>{{$product->count}} szt.</td>
                <td>{{$product->cost}} zl.</td>
                <td>
                    <a href="{{route('product.edit', $product)}}" type="button" class="btn btn-primary">Redagować</a>
                    <form action="{{route('product.destroy', $product)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn secondary">Usunąć</button>
                    </form>
                </td>

            </tr>

            @endforeach
            </tr>
        </tbody>
    </table>
@endsection
