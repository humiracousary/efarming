<?php

use App\Models\Product;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebhomeController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\AddtocartController;
use App\Http\Controllers\MylocationController;
use App\Http\Controllers\OrderdetailsController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Category_listController;
use App\Http\Controllers\singleproductController;

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

// Route::get('/', function () {

//     return view('website.layout.webhome');
// });



//webhome
Route::get('/', [WebhomeController::class, 'webhome'])->name('webhome');

//mylocation
Route::get('location', [MylocationController::class, 'mylocation'])->name('location.mylocation');
Route::get('about', [MylocationController::class, 'about'])->name('about.farm');

//contact
Route::get('contact_us', [ContactController::class, 'trycontact'])->name('try.contact');
Route::post('contact/add', [ContactController::class, 'addcontact'])->name('contact.add');


//category
Route::get('categorize/product/{id}', [Category_listController::class, 'category'])->name('category');

// product
Route::get('singleProduct/view/{id}', [singleproductController::class, 'viewsingleproduct'])->name('view.singleproduct');


//event 
Route::get('view/event', [EventController::class, 'events'])->name('events');



//login
Route::get('login', [LoginController::class, 'login'])->name('admin.login');
Route::post('do/login', [LoginController::class, 'doLogin'])->name('admin.doLogin');

//user
Route::get('logout', [LoginController::class, 'dologout'])->name('user.logout');

//registration
Route::get('registration', [RegistrationController::class, 'registration'])->name('do.registration');
Route::post('/registration/do',[LoginController::class,'registration_store'])->name('user.registration');


//add to cart

Route::group(['middleware'=>'web_auth'],function (){

Route::get('add_to_cart/{id}', [AddtocartController::class, 'addtocart'])->name('add.cart');
Route::get('view/add_to_cart', [AddtocartController::class, 'viewcart'])->name('cart');
Route::get('/clear-cart',[AddtocartController::class,'clearCart'])->name('cart.clear');
Route::post('/checkout',[AddtocartController::class,'checkout'])->name('cart.checkout');

Route::get('billing/address', [AddtocartController::class, 'billingaddress'])->name('billing.address');

Route::post('add_to_cart/update_quantity', [AddtocartController::class, 'quantity_update'])->name('quantity.update');

//user_order_show
Route::get('my_order', [AddtocartController::class,'myorder'])->name('my.oder');
Route::get('my_order/view/{id}', [AddtocartController::class,'myorderview'])->name('my.oder.view');
});



//grouping
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is_admin']], function () {




    //home
    Route::get('/', [HomeController::class, 'home'])->name('admin');



    //logout
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');




    //product
    Route::get('create/product', [ProductController::class, 'createproduct'])->name('create.product');
    Route::get('product/list', [ProductController::class, 'productList'])->name('product.list');
    Route::post('product/add', [ProductController::class, 'add'])->name('product.add');

    Route::get('product/view/{id}', [ProductController::class, 'viewproduct'])->name('product.view');
    Route::get('product/edit/{id}', [ProductController::class, 'editproduct'])->name('product.edit');
    Route::put('product/update/{id}', [ProductController::class, 'productupdate'])->name('product.update');
    Route::get('product/delete /{id}', [ProductController::class, 'productdelete'])->name('product.delete');

    Route::get('product/search', [ProductController::class, 'productSearch'])->name('product.search');



    //category
    Route::get('category/list', [Category_listController::class, 'category_list'])->name('category.list');
    Route::get('category/form', [Category_listController::class, 'form'])->name('category.form');
    Route::post('category/add', [Category_listController::class, 'add'])->name('category.add');

    Route::get('category/delete/{id}', [Category_listController::class, 'categorydelete'])->name('category.delete');



    //order
    Route::get('order', [OrderController::class, 'order'])->name('order');
    Route::post('/filter/order',[OrderController::class,'filter'])->name('filter.order');


    Route::get('order/view/{id}', [OrderController::class, 'vieworder'])->name('order.view');;

    Route::get('order/delete/{id}',[OrderController::class,'delete'])->name('order.delete');

    Route::post('order/update/{id}',[OrderController::class,'orderUpdate'])->name('order.update');
    Route::get('order/pending',[OrderController::class,'orderPending'])->name('order.pending');
    Route::get('order/delivered',[OrderController::class,'orderDelivered'])->name('order.delivered');
    Route::get('order/cancelled',[OrderController::class,'orderCancelled'])->name('order.cancelled');


    //order-details
    Route::get('order/details', [OrderdetailsController::class, 'orderdetails'])->name('order-details');


    //tutorial
    Route::get('add/tutotal', [TutorialController::class, 'addtutorial'])->name('add.tutorial');
    Route::get('tutorial/list', [TutorialController::class, 'tutoriallist'])->name('tutorial.list');
    Route::post('tutotial/add', [TutorialController::class, 'add'])->name('tutotial.add');

    Route::get('tutorial/delete /{id}', [TutorialController::class, 'tutorialdelete'])->name('tutorial.delete');


    //event
    Route::get('event/add', [EventController::class, 'addevent'])->name('add.event');
    Route::get('event/list', [EventController::class, 'eventlist'])->name('event.list');
    Route::post('event', [EventController::class, 'add'])->name('event.add');

    Route::get('event/delete/{id}', [EventController::class, 'eventdelete'])->name('event.delete');


    //contact
    Route::get('contact', [ContactController::class, 'contact'])->name('contact.list');
    Route::get('contact/delete/{id}', [ContactController::class, 'contactdelete'])->name('contact.delete');
});
