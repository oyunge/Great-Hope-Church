<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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
//     return view('index');
// });
Route::get('/',[App\Http\Controllers\FrontendController::class, 'home'])->name('client.homePage');
Route::get('/client/about',[App\Http\Controllers\FrontendController::class, 'about'])->name('client.about');

Route::get('/client/events',[App\Http\Controllers\FrontendController::class, 'events'])->name('client.events');
Route::get('/client/sermons',[App\Http\Controllers\FrontendController::class, 'sermons'])->name('client.sermons');


Route::get('/admin/home', [App\Http\Controllers\AdminController::class, 'home']);

Route::get('/client/contact/page', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact.page');

Route::post('/client/contact/post', [App\Http\Controllers\FrontendController::class, 'contactForm'])->name('contact.post');

Route::get('/admin/introduction/welcome', [App\Http\Controllers\AdminController::class, 'introduction_createForm'])->name('admin.introduction.create.form');

Route::post('/admin/introduction/welcomeForm', [App\Http\Controllers\AdminController::class, 'introduction_create'])->name('admin.introduction.create');

Route::get('/admin/sermon/createform', [App\Http\Controllers\AdminController::class, 'sermon_createForm'])->name('admin.sermon.create.form');

Route::post('/admin/sermon/create', [App\Http\Controllers\AdminController::class, 'sermon_create'])->name('admin.sermon.create');

Route::get('/admin/events/createform', [App\Http\Controllers\AdminController::class, 'events_createForm'])->name('admin.events.create.form');

Route::post('/admin/events/create', [App\Http\Controllers\AdminController::class, 'events_create'])->name('admin.events.create');

Route::get('/admin/staff/createform', [App\Http\Controllers\AdminController::class, 'staff_createForm'])->name('admin.staff.create.form');

Route::post('/admin/staff/create', [App\Http\Controllers\AdminController::class, 'staff_create'])->name('admin.staff.create');

Route::get('/admin/about/createform', [App\Http\Controllers\AdminController::class, 'about_createForm'])->name('admin.about.create.form');

Route::post('/admin/about/create', [App\Http\Controllers\AdminController::class, 'about_create'])->name('admin.about.create');

Route::get('/admin/posts/createform', [App\Http\Controllers\AdminController::class, 'post_createForm'])->name('admin.post.create.form');

Route::post('/admin/posts/create', [App\Http\Controllers\AdminController::class, 'post_create'])->name('admin.post.create');
Route::get('/client/post/{id}', [App\Http\Controllers\FrontendController::class, 'post'])->name('client.post');
