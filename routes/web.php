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
//portfolio 1
Route::get('/porto2', [App\Http\Controllers\PortfolioController::class, 'index'])->name('homepage.index2');
// portfolio 2
Route::get('/', [App\Http\Controllers\PortfolioController::class, 'index2'])->name('homepage.index');
Route::post('/sendMail', [App\Http\Controllers\PortfolioController::class, 'sendMail'])->name('homepage.sendMail');
Route::post('/sendMail2', [App\Http\Controllers\PortfolioController::class, 'sendMail2'])->name('homepage2.sendMail2');
Route::get('/get-portfolio/{id}', [App\Http\Controllers\PortfolioController::class, 'getPortfolio'])->name('homepage.getPortfolio');
Route::get('/me', [App\Http\Controllers\PortfolioController::class, 'link'])->name('bio.link');

Auth::routes();

Route::group(['middleware' => ['auth'], "prefix" => "admin/"], function () {
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
    //===================================ABOUT=======================================
    Route::get('/about', [App\Http\Controllers\AdminController::class, 'about'])->name('admin.about');
    Route::post('/storeAbout', [App\Http\Controllers\AdminController::class, 'storeAbout'])->name('admin.storeAbout');
    Route::put('/updateAbout/{id}', [App\Http\Controllers\AdminController::class, 'updateAbout'])->name('admin.updateAbout');
    Route::delete('/destroyAbout/{id}', [App\Http\Controllers\AdminController::class, 'destroyAbout'])->name('admin.destroyAbout');
    //===================================EDUCATION=======================================
    Route::get('/education', [App\Http\Controllers\AdminController::class, 'education'])->name('admin.education');
    Route::post('/storeEducation', [App\Http\Controllers\AdminController::class, 'storeEducation'])->name('admin.storeEducation');
    Route::put('/updateEducation/{id}', [App\Http\Controllers\AdminController::class, 'updateEducation'])->name('admin.updateEducation');
    Route::delete('/destroyEducation/{id}', [App\Http\Controllers\AdminController::class, 'destroyEducation'])->name('admin.destroyEducation');
    //===================================EXPERIENCE=======================================
    Route::get('/experience', [App\Http\Controllers\AdminController::class, 'experience'])->name('admin.experience');
    Route::post('/storeExperience', [App\Http\Controllers\AdminController::class, 'storeExperience'])->name('admin.storeExperience');
    Route::put('/updateExperience/{id}', [App\Http\Controllers\AdminController::class, 'updateExperience'])->name('admin.updateExperience');
    Route::delete('/destroyExperience/{id}', [App\Http\Controllers\AdminController::class, 'destroyExperience'])->name('admin.destroyExperience');
    //===================================TAGS=======================================
    Route::get('/tags', [App\Http\Controllers\AdminController::class, 'tags'])->name('admin.tags');
    Route::post('/storeTags', [App\Http\Controllers\AdminController::class, 'storeTags'])->name('admin.storeTags');
    Route::put('/updateTags/{id}', [App\Http\Controllers\AdminController::class, 'updateTags'])->name('admin.updateTags');
    Route::delete('/destroyTags/{id}', [App\Http\Controllers\AdminController::class, 'destroyTags'])->name('admin.destroyTags');
    //===================================SKILLS=======================================
    Route::get('/skills', [App\Http\Controllers\AdminController::class, 'skills'])->name('admin.skills');
    Route::post('/storeSkills', [App\Http\Controllers\AdminController::class, 'storeSkills'])->name('admin.storeSkills');
    Route::put('/updateSkills/{id}', [App\Http\Controllers\AdminController::class, 'updateSkills'])->name('admin.updateSkills');
    Route::delete('/destroySkills/{id}', [App\Http\Controllers\AdminController::class, 'destroySkills'])->name('admin.destroySkills');
    //===================================PORTFOLIO=======================================
    Route::get('/portfolio', [App\Http\Controllers\AdminController::class, 'portfolio'])->name('admin.portfolio');
    Route::get('/show-portfolio-images/{id}', [App\Http\Controllers\AdminController::class, 'showImagePortfolio'])->name('admin.showImagePortfolio');
    Route::post('/storePortfolio', [App\Http\Controllers\AdminController::class, 'storePortfolio'])->name('admin.storePortfolio');
    Route::put('/updatePortfolio/{id}', [App\Http\Controllers\AdminController::class, 'updatePortfolio'])->name('admin.updatePortfolio');
    Route::delete('/destroyImagePortfolio/{id}', [App\Http\Controllers\AdminController::class, 'destroyImagePortfolio'])->name('admin.destroyImagePortfolio');
    Route::delete('/destroyPortfolio/{id}', [App\Http\Controllers\AdminController::class, 'destroyPortfolio'])->name('admin.destroyPortfolio');
     //===================================LINK=======================================
     Route::get('/link', [App\Http\Controllers\AdminController::class, 'link'])->name('admin.link');
     Route::post('/storeLink', [App\Http\Controllers\AdminController::class, 'storeLink'])->name('admin.storeLink');
     Route::put('/updateLink/{id}', [App\Http\Controllers\AdminController::class, 'updateLink'])->name('admin.updateLink');
    Route::delete('/destroyLink/{id}', [App\Http\Controllers\AdminController::class, 'destroyLink'])->name('admin.destroyLink');
});
