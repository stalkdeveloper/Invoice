<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\InvoiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('getCreate');
    // return view('invoice.create-invoice');
    // return view('welcome');
});


Route::get('all-invoice',[InvoiceController::class,'index'])->name('getInvoice');
Route::get('create-invoice',[InvoiceController::class,'create'])->name('getCreate');
Route::post('store-invoice',[InvoiceController::class,'store'])->name('getStore');