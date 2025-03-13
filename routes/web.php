<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\UploadDok;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

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

Route::controller(UploadDok::class)->group(function(){
    Route::get('upload','index')->name('upload');
    Route::post('uploaddok','uploadDok')->name('uploadDok');
});

Route::post('/contact/send', [MailController::class, 'sendEmail'])->name('sendMail');
