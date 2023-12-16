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

Route::view('/','user.home.index');

Route::view('/login','management.loginRegister.index');

Route::get('/dashboard', function () {
return view('management.layouts.main');})->name('application');

Route::view('/admins','management.admin.index')->name('admin');
Route::view('/categories','management.category.index')->name('category');

