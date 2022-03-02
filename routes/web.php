<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PassController;
use App\Http\Controllers\SliderController;
use App\Models\Brand;
use App\Models\User;
use App\Models\Multiple;
use Illuminate\Support\Facades\DB;

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

// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware(['auth'])->name('verification.notice');]

Route::get('/', function () {
    $brands = DB::table('brands')->get();
    $abouts = DB::table('abouts')->latest()->first();
    $porto = Brand::all();
    return view('home', compact('brands', 'abouts', 'porto'));
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/category/all', [CategoryController::class, 'allCat'])->name('all.category');
Route::post('/category/add', [CategoryController::class, 'addCat'])->name('store.category');
Route::get('/category/edit/{id}', [CategoryController::class, 'editCat']);
Route::post('/category/update/{id}', [CategoryController::class, 'updateCat']);
Route::get('/softdelete/category/{id}', [CategoryController::class, 'softCat']);
Route::get('/category/restore/{id}', [CategoryController::class, 'restoreCat']);
Route::get('/category/permanent/{id}', [CategoryController::class, 'deleteCat']);

//brand
Route::get('/brand/all', [BrandController::class, 'allBrand'])->name('all.brand');
Route::post('/brand/add', [BrandController::class, 'addbrand'])->name('store.brand');
Route::get('/brand/edit/{id}', [BrandController::class, 'editBrand']);
Route::post('/brand/update/{id}', [BrandController::class, 'updateBrand']);
Route::get('/brand/delete/{id}', [BrandController::class, 'delBrand']);


Route::get('/image/all', [ImageController::class, 'allImage'])->name('all.image');
Route::post('/image/add', [ImageController::class, 'addImage'])->name('store.image');
Route::get('/image/delete/{id}', [ImageController::class, 'delImage']);



Route::get('/slider/all', [SliderController::class, 'Slider'])->name('home.slider');
Route::get('/slider/add', [SliderController::class, 'AddSlider'])->name('add.slider');
Route::post('/slider/store', [SliderController::class, 'StoreSlider'])->name('store.slider');
Route::get('/slider/edit/{id}', [SliderController::class, 'editSlider']);
Route::post('/slider/update/{id}', [SliderController::class, 'UpdateSlider'])->name('update.slider');
Route::get('/slider/delete/{id}', [SliderController::class, 'delSlider']);

Route::get('/about/all', [AboutController::class, 'About'])->name('home.about');
Route::get('/about/add', [AboutController::class, 'AddAbout'])->name('add.about');
Route::post('/about/store', [AboutController::class, 'StoreAbout'])->name('store.about');
Route::get('/about/edit/{id}', [AboutController::class, 'EditAbout']);
Route::post('/about/update/{id}', [AboutController::class, 'UpdateAbout']);
Route::get('/about/delete/{id}', [AboutController::class, 'delAbout']);

Route::get('/portofolio', [AboutController::class, 'Portofolio'])->name('portofolio');
Route::get('/contact', [AboutController::class, 'Contact'])->name('contact');
Route::get('/skills', [AboutController::class, 'Skills'])->name('skills');
Route::get('/about', [AboutController::class, 'AboutMe'])->name('aboutme');
Route::post('/contact/form', [AboutController::class, 'ContactForm'])->name('contact.form');



Route::get('/contact/admin', [ContactController::class, 'Index'])->name('all.contact');
Route::get('/contact/add', [ContactController::class, 'AddContact'])->name('add.contact');
Route::post('/contact/store', [ContactController::class, 'StoreContact'])->name('store.contact');

Route::get('/message/admin', [ContactController::class, 'AdminMessage'])->name('admin.contact');
Route::get('/message/delete/{id}', [ContactController::class, 'delMessage']);






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $users = User::all();
    return view('layouts.index');
})->name('dashboard');

Route::get('/user/logout', [BrandController::class, 'Logout'])->name('user.logout');


Route::get('/user/password', [PassController::class, 'ChangePass'])->name('user.pass');
Route::post('/password/update', [PassController::class, 'UpdatePassword'])->name('pass.update');

Route::get('/profile/edit', [PassController::class, 'EditProfile'])->name('profile.edit');
Route::post('/profile/update', [PassController::class, 'UpdateProfile'])->name('profile.update');
