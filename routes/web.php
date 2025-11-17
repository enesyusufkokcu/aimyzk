<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;

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
    return view('pages.welcome');
})->name('welcome');

Route::get('/hakkimizda', function () {
    return view('pages.about');
})->name('about');

Route::post('/contact-send', [ContactController::class, 'send'])->name('contact.send');

// Route::get('/blog-detail', function () {
//     return view('pages.blog-detail');
// })->name('blog-detail');

// Route::get('/blog', [BlogController::class, 'blogIndex'])->name('blog');
// Route::get('/blog-detail/{blog}', [BlogController::class, 'blogDetail'])->name('blog-detail');

Route::prefix('admin')->name('admin.')->middleware('auth', 'ip.restrict')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/blog-index', [AdminController::class, 'blogIndex'])->name('blog.index');
    Route::get('/blog-create-index', [AdminController::class, 'blogCreateIndex'])->name('blog.create.index');
    Route::get('/blog-edit/{blog}', [AdminController::class, 'blogEdit'])->name('blog.edit');
    Route::post('/blog-create', [AdminController::class, 'blogStore'])->name('blog.store');
    Route::post('/blog-update/{blog}', [AdminController::class, 'blogUpdate'])->name('blog.update');
    Route::post('/blog-delete/{blog}', [AdminController::class, 'blogDelete'])->name('blog.delete');
});

Route::middleware('auth', 'ip.restrict')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
