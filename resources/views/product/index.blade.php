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
        Добавить товар
    </button>
    <div id="added" class="collapse">

        <form action="{{ route('products.store') }}" method="post" class="py-3">
            @csrf
            <div class="row py-3">
                <div class="col-md-9">
                    <label>
                        Название товара
                    </label>
                    <input name="name" type="text" class="form-control">
                </div>

                <div class="col-md-3">
                    <label>
                        Цена
                    </label>
                    <input name="price" type="number" class="form-control">
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
    <h3 class="py-2 text-start">Мои товары</h3>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Цена</th>
            <th scope="col">Состояние товара</th>
            <th scope="col">Дата</th>
        </tr>
        </thead>
        <tbody>
        @foreach($productSellers as $productSeller)
            <tr>
                <th scope="row">{{ $productSeller->id }}</th>
                <td>{{ $productSeller->name }}</td>
                <td>{{ $productSeller->price }}</td>
                <td>{{ $productSeller->product_condition }}</td>
                <td>{{ $productSeller->created_at }}</td>
                <td>
                    <a href="{{ route('customers.related', $productSeller->id ) }}">Схожие Запросы</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
