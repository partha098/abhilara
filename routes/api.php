<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Testc;

Route::get("/homeapi",[Testc::class,"homeapi"]);
Route::post("/insapi",[Testc::class,"insapi"]);
Route::any("/selapi",[Testc::class,"selapi"]);
Route::any("/delapi",[Testc::class,"delapi"]);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
