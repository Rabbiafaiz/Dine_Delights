<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Models\Feedback;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/home',[HomeController::class,'home'])->name('home');
Route::get('/menu',[HomeController::class,'menu'])->name('menu');

Route::get('/contact',[FeedbackController::class,'showForm'])->name('contact');
Route::post('/feedback', [FeedbackController::class, 'submitForm'])->name('feedback');

Route::get('/signin',[LoginController::class,'index'])->name('signin');
Auth::routes();
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/error-page',function()
{
    return view('404page');
});




Route::get('/sign-up',function()
{
    return view('signup');
})->name('signup');

Route::get('/member-purchase',function(){
return view('purchase');
})->name('purchase');

Route::get('/renew-purchase',function(){
return view('renew');
})->name('renew');


Route::get('/shop-list',function(){
return view('shop_List');
})->name('list');

Route::get('/shop-details',function(){
return view('shopdetails');
})->name('details');

Route::get('/instructions',function(){
return view('special-instructions');
})->name('instructions');

Route::get('/cart',function(){
return view('shopping-cart');
})->name('cart');

Route::get('/order',function(){
return view('orderconfirmed');
})->name('confirm');

Route::get('/checkout',function(){
return view('checkout');
})->name('checkout');

Route::get('/contact',function(){
return view('contact');
})->name('contact');

Route::get('/blog',function(){
return view('blog');
})->name('blog');

Route::get('/blog-details',function(){
return view('blog_details');
})->name('blogdetails');

Route::get('/about',function(){
return view('about');
})->name('about');

Route::get('/faq',function(){
return view('FAQ');
})->name('faq');

Route::get('/chef',function(){
return view('OurChef');
})->name('chef');








