<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\InterestsController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\GuestBookController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MyBlogController;
use App\Http\Controllers\NewController;

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
    return view('main');
    // return [MainController::class, 'index']
    // return view('welcome');
});

// Route::get('/album', [AlbumController::class, 'index'])->name('album');
Route::get('album', [AlbumController::class, 'index'])->name('album');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'validate_form'])->name('contact.validate');

Route::get('/history', [HistoryController::class, 'index'])->name('history');

Route::get('/interests', [InterestsController::class, 'index'])->name('interests');

Route::get('/study', [StudyController::class, 'index'])->name('study');

Route::get('/test', [TestController::class, 'index'])->name('test');
Route::post('/test', [TestController::class, 'validate_form'])->name('test.validate');

Route::get('/main', [MainPageController::class, 'index'])->name('main');

Route::get('/new', [NewController::class, 'index'])->name('new');
Route::post('/new', [NewController::class, 'handleRequest'])->name('new.message');

Route::get('/guestbook', [GuestBookController::class, 'action_index'])->name('guestbook');
Route::post('/guestbook', [GuestBookController::class, 'store'])->name('guestbook.post');

Route::get('/blog', [BlogController::class, 'action_index'])->name('blog');
Route::get('/myblog/page?}', [MyBlogController::class, 'action_index']);

Route::get('/myblog/{id}', [MyBlogController::class, 'show'])->name('myblog');
Route::post('/blog', [BlogController::class, 'store'])->name('blog.post');

Route::get('/myblog', [MyBlogController::class, 'action_index'])->name('myblog');

// Route::get('/blog/{id}/comments', [BlogController::class, 'fetchComments']);
// Route::post('/blog/{id}/comments', [BlogController::class, 'postComment']);