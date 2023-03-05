@extends('layouts.app')

@section('content')

    <div class="col justify-content-center">

        <h3 class="py-2 text-start">
            Схожие товары с <code>{{ $productSellerName }}</code>
        </h3>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название</th>
                <th scope="col">Цена</th>
                <th scope="col">Состояние товара</th>
                <th scope="col">Продавец</th>
                <th scope="col">Дата</th>
            </tr>
            </thead>
            <tbody>
            @foreach($relatedCustomers as $relatedCustomer)
                <tr>
                    <th scope="row">{{ $relatedCustomer->id }}</th>
                    <td>{{ $relatedCustomer->name }}</td>
                    <td>{{ $relatedCustomer->price }}</td>
                    <td>{{ $relatedCustomer->product_condition }}</td>
                    <td>{{ $relatedCustomer->user_id }}</td>
                    <td>{{ $relatedCustomer->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
