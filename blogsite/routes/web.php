<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\HomeController as adminhomecontroller;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\ContactController;


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
return view('layouts/admin');
})->name('admin');

Route::get('/',[HomeController::class,'index']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/content',[HomeController::class,'content']);
Route::get('/insidecontent/{id}',[HomeController::class,'insidecontent'])->name('insidecontent');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');

//veri işlemleri
Route::post('/contact/store',[ContactController::class,'store'])->name('contact_store');

//admin post işlemleri
Route::middleware('auth')->prefix('admin')->group(function () {
  
Route::get('/post',[PostController::class,'index'])->name('admin_post');
Route::get('/post/add',[PostController::class,'add'])->name('admin_post_add');
Route::post('/post/create',[PostController::class,'create'])->name('admin_post_create');
Route::get('/inbox',[PostController::class,'inbox'])->name('admin_inbox');  
});

//admin giriş işlemleri
Route::get('/admin',[adminhomecontroller::class,'index'])->name('adminhome')->middleware('auth');
Route::get('/admin/login',[HomeController::class,'login'])->name('adminlogin');
Route::post('/admin/logincheck',[HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout',[HomeController::class,'logout'])->name('admin_logout');

Route::get('/preadmin', function () {
    return view('welcome');
    });