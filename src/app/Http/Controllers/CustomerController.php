<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $customers = Customer::query();
        if($request->filled('keyword')) {
            if($request->search_type=== 'all') {
                $customers->where(function ($query) use ($request) {
                    $query->where('name', 'like', "%{$request->keyword}%")
                        ->orWhere("email", "like", "%{$request->keyword}%")
                        ->orWhere('postal_code', 'like', "%{$request->keyword}%");
                });
            } elseif($request->search_type === 'name') {
                $customers->where('name', 'like', "%{$request->keyword}%");
            } elseif($request->search_type === 'email') {
                $customers->where('email', 'like', "%{$request->keyword}%");
            }elseif($request->search_type === 'postal_code') {
                $customers->where('postal_code', 'like', "%{$request->keyword}%");
            }
        }
        $customers = $customers->paginate(10)->withQueryString();
        // $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CustomerRequest $request)
    {
        Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'postal_code' => $request->postal_code,
            'address' => $request->address,
        ]);
        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CustomerRequest $request, Customer $customer)
    {
        $customer->update([
            'name' => $request->name,
            'email' => $request->email,
            'postal_code' => $request->postal_code,
            'address' => $request->address,
        ]);
        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index');
    }
}
