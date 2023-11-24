<?php

use App\Http\Controllers\ChangeRoleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::middleware('auth')->group(function () {

    Route::middleware('role:admin')->group(function () {

        Route::get('/admin-home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
        Route::get('admin-supplier', [ChangeRoleController::class, 'adminIndex'])->name('admin-supplier.index');
        Route::get('admin-supplier/{changeRole}', [ChangeRoleController::class, 'approve'])->name('admin-supplier.approved');
        Route::get('main-product/{product}', [ProductController::class,'mainProduct'])->name('mainProduct');
        Route::get('normal-product/{product}', [ProductController::class,'normalProduct'])->name('normalProduct');
    });

    Route::resource('product', ProductController::class);
    Route::get('marketplace', [ProductController::class,'marketplace'])->name('marketplace');

    Route::middleware('role:supplier')->group(function () {

        Route::get('/supplier-home', [App\Http\Controllers\HomeController::class, 'supplierHome'])->name('supplierHome');
    });

    Route::middleware('role:user')->group(function () {

        Route::resource('supplier-request', ChangeRoleController::class)->only('store', 'index');
        // Route::get('marketplace', [HomeController::class,'userHome'])->name('marketplace');
    });

    Route::view('about', 'about')->name('about');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
