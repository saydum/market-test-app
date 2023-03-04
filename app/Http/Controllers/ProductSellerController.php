<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductSellerRequest;
use App\Models\ProductSeller;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductSellerController extends Controller
{
    public function __construct()
    {

    }

    public function index(): View
    {
        $productSellers = (ProductSeller::all()) ? ProductSeller::all() : "";
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
}
