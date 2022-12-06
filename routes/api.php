<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/productos', [ProductosController::class,'getProductos']);
Route::get('/producto/{id}', [ProductosController::class,'producto']);

Route::post('/agregarproducto', [ProductosController::class,'insertproducto']);

Route::put('/modificarproducto/{id}', [ProductosController::class,'updateProducto']);

Route::delete('/eliminarproducto/{id}', [ProductosController::class,'deleteProducto']);
