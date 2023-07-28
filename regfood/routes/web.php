<?php

use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\CategoriController;
use App\Http\Controllers\backend\Daily_offerController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\ReservationController;
use App\Http\Controllers\backend\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\MenuController;
use App\Http\Controllers\frontend\ChefsController;
use App\Http\Controllers\backend\TableController;
use App\Http\Controllers\backend\CouponController;
//mamun
use App\Http\Controllers\frontend\ContactController as frontendContactController;
use App\Http\Controllers\backend\ContactController as backendContactController;
use App\Http\Controllers\backend\Resturent_genarelController;
use App\Http\Controllers\backend\TestimonialController;
use App\Http\Controllers\backend\TeamController;
//alamin
use App\Http\Controllers\backend\AboutController as backendAboutController;
use App\Http\Controllers\frontend\AboutController as frontendAboutController;
use App\Http\Controllers\backend\About_companyesController;
use App\Http\Controllers\backend\ChooseesController;
use App\Http\Controllers\backend\ChefsController as backendChefsController;
use App\Http\Controllers\frontend\ChefsController as frontendChefsController;
use App\Http\Controllers\backend\Resturent_blogsController;
use App\Http\Controllers\backend\WaiterController;
use App\Http\Controllers\frontend\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//tamplate
Route::get('/',[HomeController::class,'index']);
Route::post('/',[HomeController::class,'get_category'])->name('getCategory');
Route::get('/abouts',[frontendAboutController::class,'index']);
Route::get('/menu',[MenuController::class,'index'])->name('menu');
Route::get('/chefs',[frontendChefsController::class,'index']);
Route::get('/blog',[BlogController::class,'index']);
Route::get('/contact',[frontendContactController::class,'index']);
Route::post('/reservation',[ReservationController::class,'store'])->name('reservation');
//cart
Route::get('/cartmodel/{id}',[MenuController::class,'cartmodel']);
Route::post('/addcart/{id}',[MenuController::class,'addcart']);
Route::get('/count_cart',[MenuController::class,'count_cart']);
Route::get('/cart_view/{id}',[MenuController::class,'cart_view']);
Route::get('/remove/{id}',[MenuController::class,'remove']);
Route::get('/coupon_apply',[MenuController::class,'coupon_apply']);
Route::post('/checkout_view',[MenuController::class,'checkout_view']);
//order
Route::post('/order_conform',[MenuController::class,'order']);
Route::get('/order_list',[MenuController::class,'order_list'])->name('order_list');
Route::get('/edit_order/{id}',[MenuController::class,'edit_order']);
Route::put('/update_order/{id}',[MenuController::class,'update_order']);
Route::delete('/delete_order/{id}',[MenuController::class,'delete_order']);



//admin
Route::get('/admin',[AuthController::class,'index'])->name('login');
Route::post('post_login',[AuthController::class,'post_login']);
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('post_register',[AuthController::class,'post_register']);
Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard');
Route::get('logout',[AuthController::class,'logout']);
// Route::get('/verify_email/{verification_code}',[AuthController::class,'verify_email'])->name('verify_email');

//user
Route::get('/user',[UserController::class,'index'])->name('login_user');
Route::post('post__user_login',[UserController::class,'post__user_login']);
Route::get('/user_register',[UserController::class,'user_register'])->name('user_register');
Route::post('post_user_register',[UserController::class,'post_user_register']);
Route::get('logout',[UserController::class,'logout']);
//dashboard
Route::resource('/daily_offer', Daily_offerController::class);
Route::resource('/product', ProductController::class);
Route::resource('/category', CategoriController::class);
Route::resource('team', teamController::class);
Route::resource('testimonial', TestimonialController::class);
Route::resource('genarel', Resturent_genarelController::class);
Route::get('/contact_list',[backendContactController::class,'index'])->name('contact_list');
Route::post('/submit_form',[backendContactController::class,'store']);
Route::delete('/delete/{id}',[backendContactController::class,'delete']);
Route::resource('/about',backendAboutController::class)->names('ab');
Route::resource('/about_company',About_companyesController::class)->names('abcom');
Route::resource('/choose',ChooseesController::class)->names('chosen');
Route::resource('/cheff',backendChefsController::class)->names('cheff');
Route::resource('/blogs',Resturent_blogsController::class)->names('blogs');
//reservation
Route::get('/reservation_list',[ReservationController::class,'index'])->name('reservation_list');
Route::get('/reservation_create',[ReservationController::class,'create'])->name('reservation_create');
Route::post('/add_reservation',[ReservationController::class,'add_reservation'])->name('add_reservation');
Route::get('/reservation_edit/{id}',[ReservationController::class,'reservation_edit']);
Route::post('/update_reservation/{id}',[ReservationController::class,'update_reservation']);
Route::delete('/reservation_delete/{id}',[ReservationController::class,'reservation_delete']);
//coupon
Route::resource('/coupon',CouponController::class)->names('coupon');
//table
Route::resource('/table',TableController::class)->names('table');
//waiter
Route::resource('/waiter',WaiterController::class)->names('waiter');

// Route::get('/daily_offer',[Daily_offerController::class,'index'])->name('daily_offer');
// Route::post('/add_doffer',[Daily_offerController::class,'store']);
// Route::get('/list_doffer',[Daily_offerController::class,'show']);
// Route::get('/edit_doffer/{id}',[Daily_offerController::class,'edit']);

