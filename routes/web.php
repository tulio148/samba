<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});
Route::get("/about", function () {
    return view("pages.about");
});
Route::get("/classes", function () {
    return view("pages.classes");
});
Route::get("/presentations", function () {
    return view("pages.presentations");
});
