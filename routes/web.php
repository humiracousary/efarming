<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\Category_listController;

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
    return view('backend.layout.home');
});
//product
Route::get('create/product',[ProductController:: class,'createproduct'])->name('create.product');
Route::get('product/list',[ProductController::class,'productList'])->name('product.list');
Route::post('product/add',[ProductController::class,'add'])->name('product.add');

//home
Route::get('home',[HomeController::class,'home'])->name('home');

//category
Route::get('category/list',[Category_listController::class,'category_list'])->name('category.list');
Route::get('category/form',[Category_listController::class,'form'])->name('category.form');
Route::post('category/add',[Category_listController::class,'add'])->name('category.add');


//order
Route::get('order',[OrderController:: class,'order'])->name('order');

//tutorial
Route::get('add/tutotal',[TutorialController:: class,'addtutorial'])->name('add.tutorial');
Route::get('tutorial/list',[TutorialController::class,'tutoriallist'])->name('tutorial.list');
//Route::post('product/add',[ProductController::class,'add'])->name('product.add');


//event
Route::get('event/add',[EventController:: class,'addevent'])->name('add.event');
Route::get('event/list',[EventController::class,'eventlist'])->name('event.list');
Route::post('event',[EventController::class,'add'])->name('event.add');

//user
Route::get('user/add',[UserController:: class,'adduser'])->name('add.user');
Route::get('user/list',[UserController::class,'userlist'])->name('user.list');
Route::post('user',[UserController::class,'add'])->name('user.add');