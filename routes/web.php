<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserCtrl;
use App\Http\Controllers\CatCtrl;
use App\Http\Controllers\PrdCtrl;
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
//     return view('welcome');
// });

Route::get('login', function(){
    if(auth()->check()){
        return view('welcome');
    }
    return view('Login');
});

Route::get('logout', function(){
    if(auth()->check()){
        auth()->logout();
        // return view('Login');
        return redirect()->route(route: 'login');
    }
});

Route::get('/', function(){
    if(auth()->check()){
        return view('welcome');
    }
    return view('Login');
});

Route::get('signup',[UserCtrl::class,'SignUp']);
Route::get('login',[UserCtrl::class,'LoginView']);
Route::post('login',[UserCtrl::class,'Login'])->name('login');

Route::middleware(['auth','isAdmin'])->group(function(){
    Route::get('admin/dashboard',[UserCtrl::class,'AdminDashboard'])->name('adminDashboard');

    Route::get('admin/category',[CatCtrl::class,'CategoryView'])->name('catRoute');
    Route::post('admin/add-category',[CatCtrl::class,'AddCategory'])->name('addcatRoute');
    Route::get('admin/deleteCat/{id}',[CatCtrl::class,'DelCat'])->name('delCat');
    Route::get('admin/editCat/{id}',[CatCtrl::class,'CatRec'])->name('GetCatRecRoute');

    Route::get('admin/products',[PrdCtrl::class,'ProductView'])->name('prdRoute');
    

});
