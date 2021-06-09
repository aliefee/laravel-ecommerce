<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\SearchController;
use App\Http\Livewire\Admin\Board;
use App\Http\Livewire\Admin\Orders;

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
    return view('pages.show-home');
});

Route::get('/product/{product}', [ProductController::class, 'show']);


Route::get('/admin-board', Board::class);
Route::get('/admin-orders', Orders::class);


Route::get('/checkout', [CheckoutController::class, 'orderCartItems']);


Route::get('/q', [SearchController::class, 'index']);


Route::get('/successful-payment', function () {
	return view('livewire.payment-success');
});
