<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

require __DIR__.'/auth.php';

Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/apply-now', [UserController::class, 'applyNow'])->name('applyNow');
Route::get('djli-admin/login',[UserController::class, 'djliLogin'])->name('djliLogin');
Route::middleware('auth')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('admin/dashboard', 'AdminDashboard')->name('admin.dashboard');
        Route::get('admin/logout', 'AdminLogout')->name('admin.logout');
        Route::get('admin/profile', 'AdminProfile')->name('admin.profile');
        Route::post('admin/profile/update', 'AdminProfileUpdate')->name('admin.profile.update');
        Route::get('admin/change/password', 'AdminChangePassword')->name('admin.change.password');
        Route::post('admin/update/password', 'AdminUpdatePassword')->name('admin.update.password');
    });

});


Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
