<?php

use App\Http\Controllers\V1\AuthController;
use App\Http\Controllers\V1\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('v1')->group(function () {
    //Prefijo V1, todo lo que este dentro de este grupo se accedera escribiendo v1 en el navegador, es decir /api/v1/*
    Route::post('login', [AuthController::class, 'authenticate']);
    Route::post('register', [AuthController::class, 'register']);
    Route::get('customers', [CustomerController::class, 'index']);
    Route::get('customers/{id}/show', [CustomerController::class, 'show']);
    Route::group(['middleware' => ['jwt.verify']], function() {
        //Todo lo que este dentro de este grupo requiere verificación de usuario.
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('get-user', [AuthController::class, 'getUser']);
        Route::post('customers/register', [CustomerController::class, 'store']);
        Route::put('customers/{id}', [CustomerController::class, 'update']);
        Route::delete('customers/{id}/delete', [CustomerController::class, 'destroy']);
    });
});