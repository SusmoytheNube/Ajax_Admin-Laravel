<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\Admincontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\CatController;


//===For FrontendController===
Route::get('Admin-logout',[Admincontroller::class,'destroy'])->name('Admin-logout');

Route::get('/', function () {
    return view('frontend.index');
});


//===For FrontendController===
Route::controller(AdminController::class)->group(function () {
    Route::get('/dashboard','dashboard')->middleware(['auth', 'verified'])->name('dashboard');
});
//===For CatController===
Route::controller(CatController::class)->group(function () {
    Route::get('/categories','index')->name('backend.categories');
    Route::get('/addcat','addcat')->name('backend.addcat');
    Route::post('/addcatmodal','addcatmodal')->name('addcatmodal');
    Route::get('/show-category','showdata')->name('backend.showdata');
    Route::get('/delete-category/{id}','deletecat')->name('delete-category');
    Route::get('/edit-category/{id}','editcat')->name('edit-category');
    Route::post('/update-category/{id}','updatecat')->name('update-category');
});
// Route::get('/dashboard', function () {
//     return view('backend.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/add', function () {
//     return view('backend.addcat');
// })->name('backend.addcat');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//===For FrontendController===
Route::controller(FrontendController::class)->group(function () {
    Route::get('/vendors','vendors')->name('frontend.vendors');
    Route::get('/about','about')->name('frontend.about');
    Route::get('/productdetails','productdetails')->name('frontend.productdetails');
    Route::get('/contact','contact')->name('frontend.contact');
    Route::get('/account','account')->name('frontend.account');
    Route::get('/cart','cart')->name('frontend.cart');
    Route::get('/wishlist','wishlist')->name('frontend.wishlist');
    Route::get('/checkout','checkout')->name('frontend.checkout');
});

require __DIR__.'/auth.php';
