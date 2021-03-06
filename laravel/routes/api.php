<?php

use App\Http\Controllers\Api\ApiController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
	return $request->user();
});

Route::get('/', [ApiController::class, 'index']);
Route::post('/create', [ApiController::class, 'create']);
Route::post('/update', [ApiController::class, 'update']);
Route::get('/list', [ApiController::class, 'list']);
Route::post('/delete', [ApiController::class, 'delete']);
Route::post('/get', [ApiController::class, 'get']);
