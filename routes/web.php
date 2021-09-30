<?php

use App\Http\Controllers\DashboardtController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;

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
    return view('welcome');
});

Route::get('/kasir/dashboard', [DashboardtController::class, 'dashboard'])->name('dashboard');

Route::get('/kasir/product', [ProductController::class, 'showProduct'])->name('product');
Route::get('/kasir/add/product', [ProductController::class, 'addProduct']);
Route::post('/kasir/save/product', [ProductController::class, 'saveProduct']);
Route::get('/kasir/detail/product/{id}', [ProductController::class, 'detailProduct']);
Route::get('/kasir/edit/product/{id}', [ProductController::class, 'editProduct']);
Route::post('/kasir/update/product/{id}', [ProductController::class, 'updateProduct']);

Route::get('/kasir/order', [OrderController::class, 'showOrder'])->name('order');
Route::get('/kasir/add/order', [OrderController::class, 'addOrder']);
Route::post('/kasir/save/order', [OrderController::class, 'saveOrder']);
Route::get('/kasir/orderform', [OrderController::class, 'orderForm']);
Route::post('/kasir/checkout', [OrderController::class, 'checkout']);

Route::post('/kasir/save/orderdetail', [OrderDetailController::class, 'saveOrderDetail']);

Route::get('/kasir/report/day', [ReportController::class, 'day']);
Route::post('/kasir/report/filterday', [ReportController::class, 'filterDay']);
Route::post('/kasir/report/rentangday', [ReportController::class, 'rentangDay']);
Route::get('/kasir/report/month', [ReportController::class, 'month']);
Route::post('/kasir/report/filtermonth', [ReportController::class, 'filterMonth']);
Route::get('/kasir/report/kategori', [ReportController::class, 'kategori']);
Route::get('/kasir/report/exportpdf', [ReportController::class, 'exportPdf']);
