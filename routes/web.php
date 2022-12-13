<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
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


require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function ($route) {
    $route->get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/', [HomeController::class, 'index']);


Route::controller(ProductsController::class)
    ->prefix('catalog')
    ->name('catalog.')
    ->group(function ($route) {
        $route->get('/', 'index')->name('index');
        $route->get('/product', 'product')->name('product');
    });


//TODO:
//Cart
//1. сделать через group
//2. Методы (list/add/delete/update/create-order)
Route::get('/cart', [CartController::class, 'index']);
//TODO:
//Order
//1. сделать через group
//2. Методы (list/detail/delete/update)
Route::get('/order', [OrdersController::class, 'index']);

