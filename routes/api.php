<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/customers', [CustomerController::class, 'list_customers']);
    Route::get('/customer/{customer}', [CustomerController::class, 'get_customer']);
    Route::post('/create_customer', [CustomerController::class, 'create_customer']);
    Route::put('/update_customer/{customer}', [CustomerController::class, 'update_customer']);
    Route::delete('/delete_customer/{id}', [CustomerController::class, 'delete']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


