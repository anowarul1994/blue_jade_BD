<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AboutController;
use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\backend\ColorController;
use App\Http\Controllers\backend\SizeController;
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


//Concerns Catagory Create ENd
    Route::get('/concerns/category/create',[ColorController::class,'colorCreate']);
    Route::post('/concerns/category/store',[ColorController::class,'colorStore']);
    Route::get('/concerns/category/manage',[ColorController::class,'colorManage']);
    Route::get('/concerns/category/delete/{id}',[ColorController::class,'colorDelete']);
    Route::get('/concerns/category/edit/{id}',[ColorController::class,'colorEdit']);
    Route::post('/concerns/category/update/{id}',[ColorController::class,'colorUpdate']);
//Concerns Catagory Create End

//concerns Size controller Start
    Route::get('/concerns/subcategory/create',[SizeController::class,'sizeCreate']);
    Route::post('/concerns/subcategory/store',[SizeController::class,'sizeStoreBack']);
    Route::get('/concerns/subcategory/manage',[SizeController::class,'sizeManage']);
    Route::get('/concerns/subcatagory/edit/{id}',[SizeController::class,'sizeEdit']);
    Route::get('/concerns/subcatagory/delete/{id}',[SizeController::class,'sizeDelete']);
    Route::post('/concerns/subcatagory/update/{id}',[SizeController::class,'sizeUpdate']);
//concerns Size controller ENd


