<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Paymode;
use Illuminate\Http\Request;

class PaymodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paymodes = Paymode::all();
        return json_encode(compact('paymodes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $paymode = new Paymode();
        $paymode->name = $request->name;
        $paymode->observation = $request->observation;
        $paymode->save();

        return json_encode(compact('paymode'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $paymode = Paymode::find($id);
        
        if(is_null($paymode)){
            return abort(404);
        }

        return json_encode(compact('paymode'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $paymode = Paymode::find($id);
        $paymode->name = $request->name;
        $paymode->observation = $request->observation;
        $paymode->save();

        return json_encode(compact('paymode'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $paymode = Paymode::find($id);
        $paymode->delete();

        $paymodes = Paymode::all();

        return json_encode([ 'paymodes' => $paymodes, 'success' => true]);
    }
}
