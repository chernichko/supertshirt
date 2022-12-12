<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [Controller::class, 'index']);
Route::get('/catalog', [ProductsController::class, 'index']);
Route::get('/catalog/product', [ProductsController::class, 'product']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/order', [OrdersController::class, 'index']);
Route::get('/myorder', [OrdersController::class, 'index']); //???

