<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\admincontroller;


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



Route::get('name', function () {
    return view('home');
});

Route::get('logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('login',[UserController::class,'login']);
Route::post('register',[UserController::class,'register']);
Route::get('/email/verify/{id}/{hash}', [UserController::class, 'verify'])->name('verification.verify');


Route::get('product',[ProductController::class,'index']);
Route::get('/prooducts/{id}', [ProductController::class, 'detail'])->name('product.detail');
Route::get('search',[ProductController::class,'search']);
Route::post('/add_tocart', [ProductController::class, 'addtocart'])->name('addtocart');
Route::get('/cartlist', [ProductController::class, 'cartlist']);

Route::post('/add_towishlist', [ProductController::class, 'addtowishlist'])->name('addtowishlist');
Route::get('/wishlist', [ProductController::class, 'wishlist']);
Route::get('removed/{id}', [ProductController::class, 'removed']);


Route::get('/cartitem', [ProductController::class, 'cartitem']);
Route::get('remove/{id}', [ProductController::class, 'remove']);
Route::get('ordernow', [ProductController::class, 'ordernow']);
Route::post('orderplace', [ProductController::class, 'orderplace']);
Route::get('orders', [ProductController::class, 'orders']);
Route::get('/addproduct', function () {
    return view('addproduct');
});

Route::post('addproducts', [ProductController::class, 'addproducts']);


Route::get('contact', function () {
    return view('contact');
});

Route::post('/buy/{id}', [ProductController::class, 'buy']);
Route::get('shop',[ProductController::class,'shop']);


// ----------  Admin routes ------------ //
Route::get('admin', function () {
    return view('admin');
});
Route::get('adminlogin', function () {
    return view('adminlogin');
});
Route::get('admin-logout', function () {
    Session::forget('person');
    return redirect('adminlogin');
});



Route::post('admin',[admincontroller::class,'admin']);
Route::post('adminlogin',[admincontroller::class,'adminlogin']);
Route::get('admin-pproduct',[ProductController::class,'home']);
Route::get('admin-product/{id}', [ProductController::class, 'del']);


Route::get('delete',[ProductController::class,'delete']);
Route::get('/product/{id}', [ProductController::class, 'admindetail']);
Route::get('/products/{id}', [ProductController::class, 'delproduct']);
Route::get('/admin-add', function () {
    return view('admin-add');
});
Route::get('pro',[ProductController::class,'pro']);
Route::get('categ',[ProductController::class,'categ']);
Route::get('adminorder', function () {
    return view('admin-order');
});

Route::get('adminorder', [ProductController::class, 'adminorders']);
Route::post('aorderplace', [ProductController::class, 'aorderplace']);
Route::get('admin-order/{id}', [ProductController::class, 'cancel']);

Route::get('customers', [UserController::class, 'customers']);
Route::get('customers/{id}', [UserController::class, 'deleteCustomer']);

// admin-order/{{$item->id}}
Route::get('prosearch',[ProductController::class,'prosearch']);
Route::get('orddsearch',[ProductController::class,'ordsearch']);

Route::get('adminaddpro', function () {
    return view('adminaddpro');
});
Route::post('adminaddpro', [ProductController::class, 'adminaddpro']);


Route::get('furniture',[ProductController::class,'furniture']);
Route::get('cloth',[ProductController::class,'cloth']);
Route::get('kitchen',[ProductController::class,'kitchen']);
Route::get('fashion',[ProductController::class,'fashion']);
Route::get('electronics',[ProductController::class,'electronics']);

Route::get('bed',[ProductController::class,'bed']);
Route::get('chair',[ProductController::class,'chair']);
Route::get('sofa',[ProductController::class,'sofa']);

Route::get('men',[ProductController::class,'men']);
Route::get('woman',[ProductController::class,'woman']);
Route::get('winter',[ProductController::class,'winter']);
Route::get('summer',[ProductController::class,'summer']);

Route::get('ring',[ProductController::class,'ring']);
Route::get('jewllery',[ProductController::class,'jewllery']);
Route::get('glasses',[ProductController::class,'glasses']);


Route::get('led',[ProductController::class,'led']);
Route::get('mobile',[ProductController::class,'mobile']);
Route::get('laptop',[ProductController::class,'laptop']);
Route::get('fan',[ProductController::class,'fan']);
Route::get('machine',[ProductController::class,'machine']);