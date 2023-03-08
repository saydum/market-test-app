@extends('layouts.app')

@section('content')

    <div class="col justify-content-center">

        <h3 class="py-2 text-start">
            Схожие товары с <code>{{ $customerRequestName }}</code>
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
            @foreach($relatedProducts as $relatedProduct)
                <tr>
                    <th scope="row">{{ $relatedProduct->id }}</th>
                    <td>{{ $relatedProduct->name }}</td>
                    <td>{{ $relatedProduct->price }}</td>
                    <td>{{ $relatedProduct->product_condition }}</td>
                    <td>
                        @foreach(\App\Models\User::where('id', $relatedProduct->user_id)->get('name') as $user)
                            {{ $user->name }}
                        @endforeach
                    </td>
                    <td>{{ date('d.m.Y H:i', strtotime($relatedProduct->created_at)) }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
