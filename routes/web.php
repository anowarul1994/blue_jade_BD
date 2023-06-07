<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AboutController;
use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\admin\AdminController;

//demo route for frontend design

//bacekend controller Start
Route::get('/admin/dashboard',[BackendController::class,'dashboard']);
//bacekend controller end

//Admin Controller Start 
Route::get('/admin/login',[AdminController::class,'adminLogin']);
Route::post('/login/admin',[AdminController::class,'loginAdmin']);
//Admin Controller End 
//Front ENd Controller Start 

//Front ENd Controller ENd
Route::get('/',[FrontendController::class,'homePage']);
Route::get('/abouts',[AboutController::class,'aboutpage']);
Route::get('/contact',[FrontendController::class,'contactPage']);
Route::get('/concerns',[FrontendController::class,'concernsPage']);
Route::get('/news',[FrontendController::class,'newsPage']);

// About Controller Start

Route::get('/about/create',[AboutController::class,'aboutCreate']);
Route::post('/about/store',[AboutController::class,'aboutStore']);
Route::get('/about/manage',[AboutController::class,'aboutManage']);
Route::get('/about/edit/{id}',[AboutController::class,'aboutEdit']);
Route::get('/about/delete/{id}',[AboutController::class,'aboutDelete']);
Route::post('/about/update/{id}',[AboutController::class,'aboutUpdate']);

// About Controller End

//Contact Controller Start
Route::post('/contact/store',[ContactController::class,'contactStore']);
Route::get('/contact/manage',[ContactController::class,'contactManage']);
//Contact Controller End


