<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $txn = "TXN".time();
    $hash = hash ("sha512",'gtKFFx|'.$txn.'|10|iPhone|Ashish|test@gmail.com|||||||||||4R38IvwiV57FwVpsgOvTXBdLE4tHUXFW' );

    return view('welcome',['hash'=>$hash,'txn'=>$txn]);
    // $hash = hash ("sha512",'gtKFFx|1547sad|10.00|iPhone|PayU User|test@gmail.com|||||||||||4R38IvwiV57FwVpsgOvTXBdLE4tHUXFW' );
    // $url = "https://test.payu.in/_payment";
    // $req = curl_init($url);
    // curl_setopt($req, CURLOPT_URL, $url);
    // curl_setopt($req, CURLOPT_POST, true);
    //  curl_setopt($req, CURLOPT_RETURNTRANSFER, true);
    //  $headers = array( "Content-Type: application/x-www-form-urlencoded", );
    //   curl_setopt($req, CURLOPT_HTTPHEADER, $headers);
    //   $data = "key=gtKFFx&txnid=1547sad&amount=10.00&firstname=PayU User&email=test@gmail.com&phone=9876543210&productinfo=iPhone&pg=&bankcode=&surl=https://apiplayground-response.herokuapp.com/&furl=https://apiplayground-response.herokuapp.com/&ccnum=&ccexpmon=&ccexpyr=&ccvv=&ccname=&txn_s2s_flow=&hash=".$hash;
    //   curl_setopt($req, CURLOPT_POSTFIELDS, $data);
    //   $resp = curl_exec($req);
    //   curl_close($req);
    //  dd($resp);

    //  $response = Http::withHeaders([
    //     'Content-Type' => 'application/json'
    // ])->post('https://test.payu.in/_payment', [
    //     'key' => 'd57406ed6dcd166970501d29b378b07f8de546595e78f10a24e328035138ca2d',
    //     'txnid' => 't6svtqtjRdl4ws',
    //     'productinfo' => 'productinfo',
    //     'amount' => '10',
    //     'email' => 'test@test.com',
    //     'firstname' => 'XYZ',
    //     'surl' => 'https://apiplayground-response.herokuapp.com/',
    //     'furl' => 'https://apiplayground-response.herokuapp.com/',
    //     'phone' => '1234567890',
    // ]);
    // return $response;

});

Route::post('success',[PaymentController::class,'success'])->name('success');
Route::post('fail',[PaymentController::class,'fail'])->name('fail');
