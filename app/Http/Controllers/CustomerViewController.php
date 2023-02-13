<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerViewController extends Controller
{
    public function list_customers()
    {
        return view('customer.customers', ["customers" => Customer::all()]);
    }

    public function single_customer(Customer $customer)
    {
        return view('customer.single_customer', ["customer" => $customer]);
    }

    public function create_customer()
    {
        return view('customer.create_customer');
    }

    public function store_customer(Request $request)
    {
        $attributes = $request->validate([
            'first_name' => 'required|string|min:3|max:100',
            'last_name' => 'required|string|min:3|max:100',
            'email' => 'required|email|unique:customers,email',
            'user_name' => 'required|string|min:3|max:100',
            'salary' => 'required|digits_between:2,5',
            'status' => 'required|integer'
        ]);

        Customer::create($attributes);

        return redirect('/customers');
    }

    public function edit_customer(Customer $customer)
    {
        return view('customer.edit_customer', ["customer" => $customer]);
    }

    public function update_customer(Customer $customer, Request $request)
    {
        $attributes = $request->validate([
            'first_name' => 'required|string|min:3|max:100',
            'last_name' => 'required|string|min:3|max:100',
            'email' => 'required|email|unique:customers,email,'.$customer->id,
            'user_name' => 'required|string|min:3|max:100',
            'salary' => 'required|digits_between:2,5',
            'status' => 'required|integer'
        ]);

        $customer->update($attributes);

        return redirect('/customers');
    }

    public function delete_customer(Customer $customer)
    {

        if (!$customer) {
            abort(404);
        }

        $customer->delete();
        return redirect('/customers');
    }
}
