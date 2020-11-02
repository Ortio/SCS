<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;

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

Route::get('orders', [OrdersController::class, 'index']);


Route::prefix('orders')->group(function (){
    Route::get('create', [OrdersController::class, 'create']);
    Route::get('{item}', [OrdersController::class, 'show']);//item - id
    Route::post('{id}', [OrdersController::class, 'update']);
    Route::post('create', [OrdersController::class, 'store']);
});

