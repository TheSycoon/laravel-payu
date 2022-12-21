<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function success(Request $request)
    {
        // return $request->all();
        return view('success',['txm'=>$request->txnid,'amount'=>$request->amount]);
    }
    public function fail(Request $request)
    {
        // return $request->all();
        return view('fail',['txm'=>$request->txnid]);

    }
}
