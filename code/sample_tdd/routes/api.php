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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('customers', function() {
    return response()->json(\App\Customer::query()->select(['id', 'name'])->get());
});
Route::post('customers', function(Illuminate\Http\Request $request) {
    if (!$request->json('name')) {
        return response()->json([], \Illuminate\Http\Response::HTTP_UNPROCESSABLE_ENTITY);
    }
    $customer = new \App\Customer();
    $customer->name = $request->json('name');
    $customer->save();
});
Route::get('customers/{customer_id}', function() {});
Route::put('customers/{customer_id}', function() {});
Route::delete('customers/{customer_id}', function() {});
Route::get('reports', function() {});
Route::post('reports', function() {});
Route::get('reports/1', function() {});
Route::post('reports/1', function() {});
Route::put('reports/1', function() {});
Route::delete('reports/1', function() {});
