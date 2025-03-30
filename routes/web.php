<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationFormController;
use App\Http\Controllers\ApplicationFormExportController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ConsultancyBookController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamMemberController;
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
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/apply-now', [HomeController::class, 'applyNow'])->name('applyNow');
Route::post('/submit-form', [HomeController::class, 'submitForm'])->name('submitForm');
Route::get('/book-now', [HomeController::class, 'bookNow'])->name('bookNow');
Route::post('/submit-book-now', [HomeController::class, 'submitBook'])->name('submitBook');
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
        Route::get('admin/branch/edit/{id}', 'branchEdit')->name('branch.edit');
        Route::post('admin/branch/update/{id}', 'branchUpdate')->name('branch.update');
        Route::get('admin/branch/delete/{id}', 'branchDelete')->name('branch.delete');
    });

    Route::controller(ConsultancyBookController::class)->group(function (){
        Route::get('admin/consultancies', 'index')->name('consultancies.all');
        Route::get('admin/consultancies/delete/{id}', 'consultancyDelete')->name('consultancies.delete');
    });

    Route::controller(TeamMemberController::class)->group(function(){
        Route::get('admin/team-members', 'index')->name('team.members.all');
        Route::get('admin/team-member/add', 'teamMemberAdd')->name('team.member.add');
        Route::post('admin/team-member/store', 'teamMemberStore')->name('team.member.store');
        Route::get('admin/team-member/delete/{id}', 'teamMemberDelete')->name('team.member.delete');
    });

    Route::controller(GalleryController::class)->group(function(){
        Route::get('admin/gallery-image', 'index')->name('gallery.image.all');
        Route::get('admin/gallery-image/add', 'galleryImageAdd')->name('gallery.image.add');
        Route::post('admin/gallery-image/store', 'galleryImageStore')->name('gallery.image.store');
        Route::get('admin/gallery-image/delete/{id}', 'galleryImageDelete')->name('gallery.image.delete');
    });

    Route::controller(ApplicationFormController::class)->group(function(){
        Route::get('admin/application-form', 'index')->name('application.form.all');
        Route::get('admin/application-form/view/{id}', 'applicationView')->name('application.form.view');
        Route::get('admin/application-form/delete/{id}', 'applicationDelete')->name('application.form.delete');
    });

    Route::get('/export-application-form', [ApplicationFormExportController::class, 'export'])->name('export.application.form');

});


Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
