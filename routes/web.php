<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer;
use Illuminate\Support\Facades\DB;
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
    return view('customers', [
        'customers' => DB::select('select * from sales.customers where customer_id between 661 and 680')
    ]);
});