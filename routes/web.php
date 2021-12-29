<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\MylocationController;
use App\Http\Controllers\OrderdetailsController;
use App\Http\Controllers\Category_listController;
use GuzzleHttp\Middleware;

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
    return view('website.pages.home');
});

//mylocation
Route::get('location',[MylocationController::class,'mylocation'])->name('location.mylocation');




//login
Route::get('login',[LoginController:: class,'login'])->name('admin.login');
Route::post('do/login',[LoginController:: class,'doLogin'])->name('admin.doLogin');



//grouping
Route::group(['prefix'=>'admin','Middleware'=>'auth'],function(){


Route::get('/', function () {
    return view('backend.layout.home');
})->name('admin');

//logout
Route::get('logout',[LoginController:: class,'logout'])->name('admin.logout');




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


//order-details
Route::get('order/details',[OrderdetailsController:: class,'orderdetails'])->name('order-details');


//tutorial
Route::get('add/tutotal',[TutorialController:: class,'addtutorial'])->name('add.tutorial');
Route::get('tutorial/list',[TutorialController::class,'tutoriallist'])->name('tutorial.list');
Route::post('tutotial/add',[TutorialController::class,'add'])->name('tutotial.add');


//event
Route::get('event/add',[EventController:: class,'addevent'])->name('add.event');
Route::get('event/list',[EventController::class,'eventlist'])->name('event.list');
Route::post('event',[EventController::class,'add'])->name('event.add');



//stock
Route::get('stock/list',[StockController::class,'stocklist'])->name('stock.list');
Route::get('stock/form',[StockController::class,'form'])->name('stock.form');
Route::post('stock/add',[StockController::class,'add'])->name('stock.add');


});