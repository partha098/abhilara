<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Testc;

Route::get("/home",[Testc::class,"home"]);
Route::get("/frm",[Testc::class,"frm"]);
Route::post("/ins",[Testc::class,"ins"]);
Route::get('/', function () {
    return view('welcome');
});
