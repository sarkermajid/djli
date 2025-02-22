<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/branches', [HomeController::class, 'branches'])->name('branches');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/apply-now', [HomeController::class, 'applyNow'])->name('applyNow');
Route::get('djli-admin/login',[HomeController::class, 'djliLogin'])->name('djliLogin');
Route::middleware('auth')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('admin/dashboard', 'AdminDashboard')->name('admin.dashboard');
        Route::get('admin/logout', 'AdminLogout')->name('admin.logout');
        Route::get('admin/profile', 'AdminProfile')->name('admin.profile');
        Route::post('admin/profile/update', 'AdminProfileUpdate')->name('admin.profile.update');
        Route::get('admin/change/password', 'AdminChangePassword')->name('admin.change.password');
        Route::post('admin/update/password', 'AdminUpdatePassword')->name('admin.update.password');
    });

    Route::controller(BranchController::class)->group(function(){
        Route::get('admin/branches', 'index')->name('branches.all');
        Route::get('admin/branch/add', 'branchAdd')->name('branch.add');
        Route::post('admin/branch/store', 'branchStore')->name('branch.store');
        Route::get('admin/branch/view/{id}', 'branchView')->name('branch.view');
        Route::get('admin/branch/delete/{id}', 'branchDelete')->name('branch.delete');
    });

});


Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
