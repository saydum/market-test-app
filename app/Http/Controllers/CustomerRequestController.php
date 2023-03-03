<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Models\CustomerRequest;
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
}
