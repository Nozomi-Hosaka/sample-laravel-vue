<?php

use App\Http\Controllers\Api\Demo\CreateDemoAction;
use App\Http\Controllers\Api\Demo\GetDemoAction;
use App\Http\Controllers\Api\Demo\UpdateDemoAction;
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

// FIXME: 認証基盤作成
Route::get('/demo', GetDemoAction::class);
Route::post('/demo', CreateDemoAction::class);
Route::put('/demo/{id}', UpdateDemoAction::class);
