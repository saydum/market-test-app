<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductSellerRequest;
use App\Models\CustomerRequest;
use App\Models\ProductSeller;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductSellerController extends Controller
{
    public function index(): View
    {
        $productSellers = ProductSeller::all();
        return view('product.index', ['productSellers' => $productSellers]);
    }

    public function store(ProductSellerRequest $request): RedirectResponse
    {
        ProductSeller::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'product_condition' => $request->input('product_condition'),
            'user_id' => auth()->id(),
        ]);
        return redirect()->route('products.index');
    }

    public function relatedCustomer(int $id): View
    {
        $productSellerName = "";
        $productSellers = ProductSeller::where('id', $id)->limit(1)->get();

        foreach ($productSellers as $value) {
            $productSellerName = $value->name;
        }

        $relatedCustomers = CustomerRequest::where('name', 'LIKE', '%'. $productSellerName . '%')->limit(25)->get();
        return view('product.related', [
            'relatedCustomers' => $relatedCustomers,
            'productSellerName' => $productSellerName,
        ]);
    }
}
