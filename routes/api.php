<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
GET /transactions ● From (Date, opcional)
● To (Date, opcional)
● SourceAccountID (number, opcional)
Obtiene las transacciones para el usuario logueado, opcionalmente se puede filtrar por un rango de fechas e incluso por identificador de cuenta origen.
*/

Route::get('/transactions', 'transactionsController@show');



/*
POST /transfer Body: {
accountFrom: <accountId>,
accountTo: <accountId>,
amount: <?>,
date: <timestamp>,
description: <string>
}
Realiza la transferencia entre una cuenta de origen y una cuenta destino, las cuentas pueden ser del mismo usuario o no. */

Route::post('/transfer', 'transferController@show');
