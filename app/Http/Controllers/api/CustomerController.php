<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return json_encode(compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->document_number = $request->document_number;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->address = $request->address;
        $customer->birthday = $request->birthday;
        $customer->phone_number = $request->phone_number;
        $customer->email = $request->email;
        $customer->save();

        return json_encode(compact('customer'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        
        if(is_null($customer)){
            return abort(404);
        }

        return json_encode(compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $customer = Customer::find($id);
        $customer->document_number = $request->document_number;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->address = $request->address;
        $customer->birthday = $request->birthday;
        $customer->phone_number = $request->phone_number;
        $customer->email = $request->email;
        $customer->save();

        return json_encode(compact('customer'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        $customers = Customer::all();

        return json_encode([ 'customers' => $customers, 'success' => true]);
    }
}
