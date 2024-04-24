<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebController;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
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
Route::get('/about', function () {
    return view('about');
});
Route::get('/core-leadership', function () {
    return view('core-leadership');
});

Route::get('/financial-reports', function () {
    return view('financial-reports');
});

Route::get('/hospital-equipments', function () {
    return view('hospital-equipments');
});

Route::get('/clinical-services', function () {
    return view('clinical-services');
})->name('clinical-services');

Route::get('/web-gallery', function () {
    return view('gallery');
})->name('web-gallery');



Route::get('/contact-us', function () {
    return view('contact');
});



Route::get('doctor-schedule',[HomeController::class, 'doctorSchedule'])->name('doctor-schedule');
Route::get('blogs',[HomeController::class, 'blogs'])->name('blogs');

Route::get('/blog/{slug}', function ($slug) {
    // Retrieve a specific blog post using the slug
    $blog = Blog::where('slug', $slug)->first();
    $latestPosts = Blog::where('id', '!=', $blog->id)->where('status', 1)->latest()->take(5)->get();
    return view('single-blog', ['blog' => $blog, 'latestPosts' => $latestPosts]);
})->name('single.blog');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('doctor', [HomeController::class, 'doctorIndex'])->name('doctor.index');
Route::get('add-doctor', [HomeController::class, 'adddoctor'])->name('add.doctor');
Route::post('add-doctor', [HomeController::class, 'insertDoctor'])->name('insert.doctor');
Route::get('edit-doctor/{id}', [HomeController::class, 'editdoctor'])->name('edit.doctor');
Route::post('update-doctor/{id}', [HomeController::class, 'updatedoctor'])->name('update.doctor');
Route::delete('/delete/doctor/{id}', [HomeController::class, 'deletedoctor'])->name('delete.doctor');

Route::get('schedule', [HomeController::class, 'schedule'])->name('schedule.index');
Route::get('add-schedule', [HomeController::class, 'addSchedule'])->name('add.schedule');
Route::post('add-schedule', [HomeController::class, 'insertSchedule'])->name('insert.schedule');
Route::get('edit-schedule/{id}', [HomeController::class, 'editSchedule'])->name('edit.schedule');
Route::post('update-schedule/{id}', [HomeController::class, 'updateSchedule'])->name('update.schedule');
Route::delete('/delete/schedule/{id}', [HomeController::class, 'deleteSchedule'])->name('delete.schedule');

Route::get('banner', [HomeController::class, 'bannerIndex'])->name('banner.index');
Route::get('add-banner', [HomeController::class, 'addBanner'])->name('add.banner');
Route::post('add-banner', [HomeController::class, 'insertBanner'])->name('insert.banner');
Route::get('edit-banner/{id}', [HomeController::class, 'editBanner'])->name('edit.banner');
Route::post('update-banner/{id}', [HomeController::class, 'updateBanner'])->name('update.banner');
Route::delete('/delete/banner/{id}', [HomeController::class, 'deleteBanner'])->name('delete.banner');

Route::get('blog', [HomeController::class, 'blogIndex'])->name('blog.index');
Route::get('add-blog', [HomeController::class, 'addBlog'])->name('add.blog');
Route::post('add-blog', [HomeController::class, 'insertBlog'])->name('insert.blog');
Route::get('edit-blog/{id}', [HomeController::class, 'editBlog'])->name('edit.blog');
Route::post('update-blog/{id}', [HomeController::class, 'updateBlog'])->name('update.blog');
Route::delete('/delete/blog/{id}', [HomeController::class, 'deleteBlog'])->name('delete.blog');

Route::get('gallery', [HomeController::class, 'galleryIndex'])->name('gallery.index');
Route::get('add-gallery', [HomeController::class, 'addGallery'])->name('add.gallery');
Route::post('add-gallery', [HomeController::class, 'insertGallery'])->name('insert.gallery');
Route::get('edit-gallery/{id}', [HomeController::class, 'editGallery'])->name('edit.gallery');
Route::post('update-gallery/{id}', [HomeController::class, 'updateGallery'])->name('update.gallery');
Route::delete('/delete/gallery/{id}', [HomeController::class, 'deleteGallery'])->name('delete.gallery');


Route::get('galleryitem', [HomeController::class, 'galleryitemIndex'])->name('galleryitem.index');
Route::get('add-galleryitem', [HomeController::class, 'addGalleryItem'])->name('add.galleryitem');
Route::post('add-galleryitem', [HomeController::class, 'insertGalleryItem'])->name('insert.galleryitem');
Route::get('edit-galleryitem/{id}', [HomeController::class, 'editGalleryItem'])->name('edit.galleryitem');
Route::post('update-galleryitem/{id}', [HomeController::class, 'updateGalleryItem'])->name('update.galleryitem');
Route::delete('/delete/galleryitem/{id}', [HomeController::class, 'deleteGalleryItem'])->name('delete.galleryitem');


Route::post('form-submit',[WebController::class, 'contactForm'])->name('form.submit');

Route::get('contacts',[HomeController::class, 'contactForms'])->name('contacts');
