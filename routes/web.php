<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerViewController;
use App\Http\Controllers\AuthViewController;

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


Route::get('/login', [AuthViewController::class, 'login_view'])->name('login')->middleware('guest');
Route::post('/login', [AuthViewController::class, 'login'])->middleware('guest');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/customers', [CustomerViewController::class, 'list_customers']);
    Route::get('/create_customers', [CustomerViewController::class, 'create_customer']);
    Route::post('/store_customers', [CustomerViewController::class, 'store_customer']);
    Route::get('/customers/{customer}', [CustomerViewController::class, 'single_customer']);
    Route::get('/customers/{customer}/edit', [CustomerViewController::class, 'edit_customer']);
    Route::post('/customers/{customer}/update', [CustomerViewController::class, 'update_customer']);
    Route::get('/customers/{customer}/delete', [CustomerViewController::class, 'delete_customer']);
    Route::post('logout', [AuthViewController::class, 'logout']);
});


