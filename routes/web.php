<?php

use App\Http\Controllers\AccountsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AccountsController::class, 'homeG']) ->name('ahomeG');
Route::get('/ahome', [AccountsController::class, 'home']) ->name('ahome');

Route::get('/aeventG', [AccountsController::class, 'eventG']) ->name('aeventG');
Route::get('/aevent', [AccountsController::class, 'event']) ->name('aevent');
Route::get('/aeventDetailG', [AccountsController::class, 'eventDetailG']) ->name('aeventDetailG');
Route::get('/aeventDetail', [AccountsController::class, 'eventDetail']) ->name('aeventDetail');

Route::get('/abookG', [AccountsController::class, 'bookG']) ->name('abookG');
Route::get('/abook', [AccountsController::class, 'book']) ->name('abook');
Route::get('/abookDetailG', [AccountsController::class, 'bookDetailG']) ->name('abookDetailG');
Route::get('/abookDetail', [AccountsController::class, 'bookDetail']) ->name('abookDetail');

Route::get('/aarticlesG', [AccountsController::class, 'articlesG']) ->name('aarticlesG');
Route::get('/aarticles', [AccountsController::class, 'articles']) ->name('aarticles');
Route::get('/aarticlesDetailG', [AccountsController::class, 'articlesDetailG']) ->name('aarticlesDetailG');
Route::get('/aarticlesDetail', [AccountsController::class, 'articlesDetail']) ->name('aarticlesDetail');

// Route::get('/aeventG', [AccountsController::class, 'eventGnextpage']) ->name('aeventG');

Route::get('/adonation', [AccountsController::class, 'donation']) ->name('adonation');

Route::get('/aprofile', [AccountsController::class, 'profile']) ->name('aprofile');

Route::get('/aupdateProfile', [AccountsController::class, 'updateProfile']) ->name('aupdateProfile');

Route::get('/auth/google', [AccountsController::class, 'googlepage'])->name('google.page');
Route::get('/auth/google/callback', [AccountsController::class, 'googlecallback'])->name('google.callback');

Route::get('/anew-password/{token}', [AccountsController::class, 'resetPassword'])->name('anew-password');
Route::post('/aresetPassword', [AccountsController::class, 'resetPasswordPost']) ->name('aresetPassword.post');

Route::get('/aforgetPassword', [AccountsController::class, 'forgetPassword']) ->name('aforgetPassword');
Route::post('/aforgetPassword', [AccountsController::class, 'forgetPasswordPost']) ->name('aforgetPassword.post'); 

Route::get('/alogin', [AccountsController::class, 'login']) ->name('alogin');
Route::post('/alogin', [AccountsController::class, 'loginPost']) ->name('alogin.post'); 

Route::get('/aregisterNotif', [AccountsController::class, 'registerNotif'])->name('aregisterNotif');
Route::get('/aregister', [AccountsController::class, 'register'])->name('aregister');
Route::post('/aregister', [AccountsController::class, 'registerPost']) ->name('aregister.post'); 
