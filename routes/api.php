<?php

use App\Http\Controllers\OrdersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/', [OrdersController::class, 'index'])->name('home');

Route::prefix('orders')->group(function (){
    Route::get('create', [OrdersController::class, 'create'])->name('createOrder');
    Route::get('{item}', [OrdersController::class, 'show'])->name('showOrder');//item - id
    Route::post('{id}', [OrdersController::class, 'update'])->name('updateOrder');
    Route::post('create', [OrdersController::class, 'store'])->name('storeOrder');
});
