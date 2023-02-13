<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Http\Response;

class CustomerController extends Controller
{

    public function list_customers()
    {
        return response()->json(Customer::all());
    }

    public function get_customer($customer)
    {
        $customer = Customer::find($customer);

        return $customer ?? response()->json(['status' => "Customer Not found"], Response::HTTP_NOT_FOUND);
    }

    public function create_customer(Request $request)
    {
        $attributes = $request->validate([
            'first_name' => 'required|string|min:3|max:100',
            'last_name' => 'required|string|min:3|max:100',
            'email' => 'required|email|unique:customers,email',
            'user_name' => 'required|string|min:3|max:100',
            'salary' => 'required|digits_between:2,5',
            'status' => 'required|integer'
        ]);


        return Customer::create($attributes);
    }

    public function update_customer($customer_id, Request $request)
    {
        $customer = Customer::find($customer_id);

        if (!$customer) {
            return response()->json(['status' => "Customer Not found"], Response::HTTP_NOT_FOUND);;
        }

        $attributes = $request->validate([
            'first_name' => 'required|string|min:3|max:100',
            'last_name' => 'required|string|min:3|max:100',
            'email' => 'required|email|unique:customers,email,'.$customer->id,
            'user_name' => 'required|string|min:3|max:100',
            'salary' => 'required|digits_between:2,5',
            'status' => 'required|integer'
        ]);

        $customer = $customer->update($attributes);

        return Customer::find($customer);
    }

    public function delete($id)
    {
        $customer = Customer::find($id);

        if (!$customer) {
            return response()->json(['status' => "Customer Not found"], Response::HTTP_NOT_FOUND);;
        }

        $customer->delete();
        return "Deleted";
    }
}
