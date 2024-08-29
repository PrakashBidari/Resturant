<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\MenuController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\FrontendController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// STORAGE LINKED ROUTE
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::get('/', [FrontendController::class,'home'])->name('home');
Route::get('/about', [FrontendController::class,'about'])->name('about');
Route::get('/blog', [FrontendController::class,'blog'])->name('blog');
Route::get('/menu', [FrontendController::class,'menu'])->name('menu');
Route::get('/contact', [FrontendController::class,'contact'])->name('contact');
Route::get('/training', [FrontendController::class,'trainings'])->name('trainings');
Route::get('/blog-detail/{blog}', [FrontendController::class,'blogDetail'])->name('blog.detail');
Route::get('/training-class/{id}', [FrontendController::class,'trainingClass'])->name('training.class');
Route::get('/training-detail/{slug}', [FrontendController::class,'trainingDetail'])->name('training.detail');
Route::get('/gallery', [FrontendController::class,'gallery'])->name('gallery');
Route::get('/gallery-detail/{id}', [FrontendController::class,'gallerydetail'])->name('gallery.detail');


Route::resources([
    'contacts' => ContactController::class,
]);


Route::get('/menus/{parentId}', [MenuController::class, 'getMenusByCategory']);


Route::prefix('admin')->middleware(AdminMiddleware::class)->group(function (){
    require __DIR__ . '/admin.php';
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
