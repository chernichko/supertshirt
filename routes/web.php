<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
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
        $route
            ->get('/', 'index')
            ->name('index');
        $route
            ->get('/{productModel}', 'product')
            ->name('product');
    });

Route::controller(CartController::class)
    ->prefix('cart')
    ->name('cart.')
    ->group(function ($route) {
        $route->get('/', 'index')->name('index');
        $route->get('/add', 'add')->name('addCart');
        $route->get('/delete', 'delete')->name('deleteCart');
        $route->get('/create-order', 'createOrder')->name('createOrder');
    });

Route::controller(OrderController::class)
    ->prefix('order')
    ->name('order.')
    ->group(function ($route) {
        $route->get('/', 'index')->name('index');
        $route->get('/list', 'list')->name('listOrder');
        $route->get('/detail', 'add')->name('detailOrder');
        $route->get('/update', 'update')->name('updateOrder');
        $route->get('/delete', 'delete')->name('deleteOrder');
    });

//Route::controller(BlogController::class)
//    ->prefix('blog')
//    ->name('blog.')
//    ->group(function ($route) {
//        $route->get('/', 'index')->name('index');
//        $route->get('/single', 'single')->name('singleBlog');
//    });


//TODO:
//Cart
//1. сделать через group
//2. Методы (list/add/delete/update/create-order)
//Route::get('/cart', [CartController::class, 'index']);
//TODO:
//Order
//1. сделать через group
//2. Методы (list/detail/delete/update)
//Route::get('/order', [OrderController::class, 'index']);

