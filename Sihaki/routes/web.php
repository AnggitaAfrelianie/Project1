<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KepengurusanController;



Route::get('crud', function(){
return view('crud',['nama'=> 'Anggi']);
});

//Route::get('/home',[CrudController::class,'index'])->name('dashboard');

//Route::prefix('master-data')->group (function(){
//Route::get('/data_user',[CrudController::class,'index'])->name('dashboard');
//Route::get('/data_pengajuan',[CrudController::class,'edit'])->name('dashboard');
//Route::get('/data_upload',[CrudController::class,'edit'])->name('dashboard');
//});



Route::get('/', function (){
    return view ('welcome');
});

Route::get('/home',[HomeController::class, 'index'])->name('home');
Route::get('/crud',[CrudController::class, 'index'])->name('crud');
Route::get('/kepengurusan',[KepengurusanController::class, 'index'])->name('kepengurusan');
Route::get('/kepengurusan/detail/{id_pengurus}',[KepengurusanController::class, 'detail']);