<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\ApiController;
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

Route::post('/add-lead', [ApiController::class,'saveLead']);
Route::post('/json/add-lead', [ApiController::class,'saveLeadJson']);
Route::post('register', [UserController::class, 'register'])->name('api.user.create');
