<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/supplier", "CodeController@showSuppliers")->name('supplier');
Route::post("/supplier_save", "CodeController@storeSuppliers")->name('supplier_save');
Route::get("/products", "CodeController@showProducts")->name('products');
Route::post("/supplier_save", "CodeController@storeSuppliers")->name('supplier_save');
