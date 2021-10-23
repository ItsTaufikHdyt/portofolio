<?php

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

Route::get('/', function () {
    return view('admin.index');
});

Auth::routes();

Route::group(['middleware' => ['auth'], "prefix" => "admin/"], function () {
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
    //===================================ABOUT=======================================
    Route::get('/about', [App\Http\Controllers\AdminController::class, 'about'])->name('admin.about');
    Route::post('/storeAbout', [App\Http\Controllers\AdminController::class, 'storeAbout'])->name('admin.storeAbout');
    Route::put('/updateAbout/{id}', [App\Http\Controllers\AdminController::class, 'updateAbout'])->name('admin.updateAbout');
    Route::delete('/destroyAbout/{id}', [App\Http\Controllers\AdminController::class, 'destroyAbout'])->name('admin.destroyAbout');
    //===================================Education=======================================
    Route::get('/education', [App\Http\Controllers\AdminController::class, 'education'])->name('admin.education');
    Route::post('/storeEducation', [App\Http\Controllers\AdminController::class, 'storeEducation'])->name('admin.storeEducation');
    Route::put('/updateEducation/{id}', [App\Http\Controllers\AdminController::class, 'updateEducation'])->name('admin.updateEducation');
    Route::delete('/destroyEducation/{id}', [App\Http\Controllers\AdminController::class, 'destroyEducation'])->name('admin.destroyEducation');
    //===================================Experience=======================================
    Route::get('/experience', [App\Http\Controllers\AdminController::class, 'experience'])->name('admin.experience');
    Route::post('/storeExperience', [App\Http\Controllers\AdminController::class, 'storeExperience'])->name('admin.storeExperience');
    Route::put('/updateExperience/{id}', [App\Http\Controllers\AdminController::class, 'updateExperience'])->name('admin.updateExperience');
    Route::delete('/destroyExperience/{id}', [App\Http\Controllers\AdminController::class, 'destroyExperience'])->name('admin.destroyExperience');
    //===================================Tags=======================================
    Route::get('/tags', [App\Http\Controllers\AdminController::class, 'tags'])->name('admin.tags');
    Route::post('/storeTags', [App\Http\Controllers\AdminController::class, 'storeTags'])->name('admin.storeTags');
    Route::put('/updateTags/{id}', [App\Http\Controllers\AdminController::class, 'updateTags'])->name('admin.updateTags');
    Route::delete('/destroyTags/{id}', [App\Http\Controllers\AdminController::class, 'destroyTags'])->name('admin.destroyTags');
});
