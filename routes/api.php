<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaxController;
use App\Http\Controllers\DiskonController;
use App\Http\Controllers\RevenueController;
use App\Http\Controllers\ReportController;
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

Route::get('/report', [ReportController::class, 'getReport']);
Route::post('/hitung-share-ojol', [RevenueController::class, 'hitungShareOjol']);
Route::post('/hitung-diskon', [DiskonController::class, 'hitungDiskon']);
Route::post('/hitung-pajak', [TaxController::class, 'hitungPajak']);
Route::get('/hitung-pajak', [TaxController::class, 'hitungPajak']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
