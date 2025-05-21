<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationFormController;
use App\Http\Controllers\ApplicationFormExportController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ConsultancyBookController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\SliderController;
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

require __DIR__ . '/auth.php';

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/branches', [HomeController::class, 'branches'])->name('branches');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/apply-now', [HomeController::class, 'applyNow'])->name('applyNow');
Route::get('/notice', [HomeController::class, 'notice'])->name('notice');
Route::get('/web-notice-view/{id}', [HomeController::class, 'webNoticeView'])->name('webNoticeView');
Route::post('/submit-form', [HomeController::class, 'submitForm'])->name('submitForm');
Route::get('/book-now', [HomeController::class, 'bookNow'])->name('bookNow');
Route::post('/submit-book-now', [HomeController::class, 'submitBook'])->name('submitBook');
Route::get('djli-admin/login', [HomeController::class, 'djliLogin'])->name('djliLogin');
Route::middleware('auth')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('admin/dashboard', 'AdminDashboard')->name('admin.dashboard');
        Route::get('admin/logout', 'AdminLogout')->name('admin.logout');
        Route::get('admin/profile', 'AdminProfile')->name('admin.profile');
        Route::post('admin/profile/update', 'AdminProfileUpdate')->name('admin.profile.update');
        Route::get('admin/change/password', 'AdminChangePassword')->name('admin.change.password');
        Route::post('admin/update/password', 'AdminUpdatePassword')->name('admin.update.password');
    });

    Route::controller(BranchController::class)->group(function () {
        Route::get('admin/branches', 'index')->name('branches.all');
        Route::get('admin/branch/add', 'branchAdd')->name('branch.add');
        Route::post('admin/branch/store', 'branchStore')->name('branch.store');
        Route::get('admin/branch/view/{id}', 'branchView')->name('branch.view');
        Route::get('admin/branch/edit/{id}', 'branchEdit')->name('branch.edit');
        Route::post('admin/branch/update/{id}', 'branchUpdate')->name('branch.update');
        Route::get('admin/branch/delete/{id}', 'branchDelete')->name('branch.delete');
    });

    Route::controller(ConsultancyBookController::class)->group(function () {
        Route::get('admin/consultancies', 'index')->name('consultancies.all');
        Route::get('admin/consultancies/delete/{id}', 'consultancyDelete')->name('consultancies.delete');
    });

    Route::controller(TeamMemberController::class)->group(function () {
        Route::get('admin/team-members', 'index')->name('team.members.all');
        Route::get('admin/team-member/add', 'teamMemberAdd')->name('team.member.add');
        Route::post('admin/team-member/store', 'teamMemberStore')->name('team.member.store');
        Route::get('admin/team-member/edit/{id}', 'teamMemberEdit')->name('team.member.edit');
        Route::post('admin/team-member/update/{id}', 'teamMemberUpdate')->name('team.member.update');
        Route::get('admin/team-member/delete/{id}', 'teamMemberDelete')->name('team.member.delete');
    });

    Route::controller(GalleryController::class)->group(function () {
        Route::get('admin/gallery-image', 'index')->name('gallery.image.all');
        Route::get('admin/gallery-image/add', 'galleryImageAdd')->name('gallery.image.add');
        Route::post('admin/gallery-image/store', 'galleryImageStore')->name('gallery.image.store');
        Route::get('admin/gallery-image/edit/{id}', 'galleryImageEdit')->name('gallery.image.edit');
        Route::post('admin/gallery-image/update/{id}', 'galleryImageUpdate')->name('gallery.image.update');
        Route::get('admin/gallery-image/delete/{id}', 'galleryImageDelete')->name('gallery.image.delete');
    });

    Route::controller(ApplicationFormController::class)->group(function () {
        Route::get('admin/application-form', 'index')->name('application.form.all');
        Route::get('admin/application-form/view/{id}', 'applicationView')->name('application.form.view');
        Route::get('admin/application-form/delete/{id}', 'applicationDelete')->name('application.form.delete');
    });

    Route::controller(SliderController::class)->group(function () {
        Route::get('admin/slider/images', 'sliderImages')->name('slider.images');
        Route::get('admin/slider-image/add', 'sliderImageAdd')->name('slider.image.add');
        Route::post('admin/slider-image/store', 'sliderImageStore')->name('slider.image.store');
        Route::get('admin/slider-image/edit/{id}', 'sliderImageEdit')->name('slider.image.edit');
        Route::post('admin/slider-image/update/{id}', 'sliderImageUpdate')->name('slider.image.update');
        Route::get('admin/slider-image/delete/{id}', 'sliderImageDelete')->name('slider.image.delete');
    });

    Route::controller(NoticeController::class)->group(function () {
        Route::get('admin/notices', 'index')->name('notice.all');
        Route::get('admin/notice/add', 'noticeAdd')->name('notice.add');
        Route::post('admin/notice/store', 'noticeStore')->name('notice.store');
        Route::get('admin/notice/view/{id}', 'noticeView')->name('notice.view');
        Route::get('admin/notice/edit/{id}', 'noticeEdit')->name('notice.edit');
        Route::post('admin/notice/update/{id}', 'noticeUpdate')->name('notice.update');
        Route::get('admin/notice/delete/{id}', 'noticeDelete')->name('notice.delete');
    });

    Route::get('/export-application-form', [ApplicationFormExportController::class, 'export'])->name('export.application.form');
});


Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
