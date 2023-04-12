@extends('crm.layouts.app')

@section('content')

    <h2 class="mb-4">Zamówienia</h2>
    <a href="{{route('order.create')}}" type="button" class="btn btn-primary mb-4">Tworzyć</a>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Towar</th>
            <th scope="col">Nazwa klienta</th>
            <th scope="col">Email</th>
            <th scope="col">Telefon</th>
            <th scope="col">Adres</th>
            <th scope="col">Suma</th>
            <th scope="col">Stan</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
        <tr>
            <th scope="row">{{$order->id}}</th>
            <td>
                <table class="table">
                    <tbody>
                    @foreach($order->products as $key => $product)
                    <tr>
                        <th scope="row">{{$key +1}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->order_count}} zl.</td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </td>
            <td>{{$order->customer}}</td>
            <td><a href="#">{{$order->email}}</a></td>
            <td>{{$order->telephone}}</td>
            <td>{{$order->address}}</td>
            <td>1540 zl.</td>
            <td>
                <select class="form-select form-control" aria-label="Default select example">
                    <option selected>Nowe zamówienie</option>
                    <option >W przetwórstwie</option>
                    <option >Zamówienie wysłane</option>
                </select>
            </td>
        </tr>
        @endforeach






        </tbody>
    </table>

@endsection
