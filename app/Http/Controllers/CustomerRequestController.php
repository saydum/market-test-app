<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Models\CustomerRequest;
use App\Models\ProductSeller;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CustomerRequestController extends Controller
{
    public function index(): View
    {
        $customerRequests = (CustomerRequest::all()) ? CustomerRequest::all() : "";
        return view('customer.index', ['customerRequests' => $customerRequests]);
    }

    public function store(StoreCustomerRequest $request): RedirectResponse
    {
        CustomerRequest::create([
            'name' => $request->input('name'),
            'price_from' => $request->input('price_from'),
            'price_up_to' => $request->input('price_up_to'),
            'product_condition' => $request->input('product_condition'),
            'user_id' => auth()->id(),
        ]);
        return redirect()->route('customers.index');
    }

    public function myRequests(): View
    {
        return view('customer.index', [
            'title' => 'Мои запросы',
            'customerRequests' => CustomerRequest::where('user_id', '=', auth()->id())->get(),
        ]);
    }

    public function relatedProduct(int $id): View
    {
        $customerRequestName = "";
        $customerRequest = CustomerRequest::where('id', $id)->limit(1)->get();

        foreach ($customerRequest as $value) {
            $customerRequestName = $value->name;
        }

        $relatedProducts = ProductSeller::where('name', 'LIKE', '%'. $customerRequestName . '%')->limit(25)->get();
        return view('customer.related', [
            'relatedProducts' => $relatedProducts,
            'customerRequestName' => $customerRequestName,
        ]);
    }
}
