@extends('layouts.app')

@section('content')

<div class="col justify-content-center">

    <h3 class=""></h3>
    <button
        class="btn btn-outline-success py-2 text-start"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#added"
        aria-expanded="false"
        aria-controls="collapseExample">
        Добавить запрос
    </button>
    <div id="added" class="collapse">

        <form action="{{ route('customers.store') }}" method="post" class="py-3">
            @csrf
            <div class="row py-3">
                <div class="col">
                    <label>
                        Название товара
                    </label>
                    <input name="name" type="text" class="form-control">
                </div>
            </div>

            <div class="row py-3">
                <div class="col">
                    <label>
                        Цена от
                    </label>
                    <input name="price_from" type="number" class="form-control">
                </div>
                <div class="col">
                    <label>
                        Цена до
                    </label>
                    <input name="price_up_to" type="number" class="form-control">
                </div>
            </div>

            <div class="row py-3">
                <div class="col">
                    <label>
                        Состояние товара
                    </label>
                    <select name="product_condition" class="form-select">
                        <option selected value="новый">Новый</option>
                        <option value="б/у">б/у</option>
                    </select>
                </div>
            </div>

            <div class="col-mb-3 py-3">
                <button type="submit" class="btn btn-success">Добавить</button>
            </div>
        </form>
    </div>


    <hr>
    <h3 class="py-2 text-start">История запросов</h3>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Цена от</th>
            <th scope="col">Цена до</th>
            <th scope="col">Состояние товара</th>
            <th scope="col">Дата</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customerRequests as $customerRequest)

            <tr>
                <th scope="row">{{ $customerRequest->id }}</th>
                <td>{{ $customerRequest->name }}</td>
                <td>{{ $customerRequest->price_from }}</td>
                <td>{{ $customerRequest->price_up_to }}</td>
                <td>{{ $customerRequest->product_condition }}</td>
                <td>{{ $customerRequest->created_at }}</td>
                <td>
                    <a href="{{ route('products.related', $customerRequest->id ) }}">Схожие продукты</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
