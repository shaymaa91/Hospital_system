<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePage\HomePageController;
use App\Http\Controllers\Admin\FixedController;
use App\Http\Controllers\Admin\AdminController;

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
    return view('welcome');
});
Route::get('Home-Page',[HomePageController::class,'index']);

    Route::get('/admin-login',[HomePageController::class,'adminclick'])->name('admin.login')->middleware(['auth']);
    Route::prefix("admin")->group(function(){    
        Route::get("fixed-page",[FixedController::class,'index']);
        Route::get("dashboard",[FixedController::class,'dashboard'])->name('admin.dashboard');
        Route::resource('Admin-doctor',AdminController::class);
    });

   
        // Matches The "/admin/users" URL
    



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
