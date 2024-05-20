<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// test
Route::get('/admin/login', function () { return view('admins.login');});
Route::get('admin/layout', function () { return view('layouts.adminlayout');});
Route::get('/customer/index', function (){ return view('customers.index');});
Route::get('customer/register/show', [CustomerController::class, 'customerRegisterShow'])->name('customer.register.show');
Route::post('customer/register/process' ,[CustomerController::class , 'customerRegisterProcess'])->name('customre.register.process');
Route::get('/customer/login/show', [CustomerController::class, 'loginShow'])->name('login.show');

