<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\MenuController;
use App\Http\Controllers\admin\TrainingController;

Route::get('/',function(){
    return view('backend.index');
})->name('dashboard');

Route::resources([
    'blogs' => BlogController::class,
    'trainings' => TrainingController::class,
    'galleries' => GalleryController::class,
    'categories' => CategoryController::class,
    'menus' => MenuController::class
]);

Route::get('/categories/{parentId}/children', [CategoryController::class, 'getChildren']);

Route::delete('/single-image-dlt/{id}', [GalleryController::class,'singleDlt'])->name('single-dlt');
