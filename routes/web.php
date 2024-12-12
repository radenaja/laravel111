<?php

use App\Http\Controllers\AccountsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AccountsController::class, 'homeG']) ->name('ahomeG');
Route::get('/ahome', [AccountsController::class, 'home']) ->name('ahome');
Route::get('/aprofile', [AccountsController::class, 'profile']) ->name('aprofile');

Route::get('/auth/google', [AccountsController::class, 'googlepage'])->name('google.page');
Route::get('/auth/google/callback', [AccountsController::class, 'googlecallback'])->name('google.callback');

Route::get('/anew-password/{token}', [AccountsController::class, 'resetPassword'])->name('anew-password');
Route::post('/aresetPassword', [AccountsController::class, 'resetPasswordPost']) ->name('aresetPassword.post');

Route::get('/aforgetPassword', [AccountsController::class, 'forgetPassword']) ->name('aforgetPassword');
Route::post('/aforgetPassword', [AccountsController::class, 'forgetPasswordPost']) ->name('aforgetPassword.post'); 

Route::get('/alogin', [AccountsController::class, 'login']) ->name('alogin');
Route::post('/alogin', [AccountsController::class, 'loginPost']) ->name('alogin.post'); 

Route::get('/aregister', [AccountsController::class, 'register'])->name('aregister');
Route::post('/aregister', [AccountsController::class, 'registerPost']) ->name('aregister.post'); 
