<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleGeneratorController;

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


Route::get('/write', function () {
    $title = '';
    $content = '';
    return view('write', compact('title', 'content'));
})->name('writePage');
Route::post('/write/generate', [ArticleGeneratorController::class, 'index'])->name('write');


Route::get('/image', function () {
    $title = '';
    $content = '';
    return view('image', compact('title', 'content'));
})->name('imagePage');
Route::post('/image/generate', [ArticleGeneratorController::class, 'image'])->name('image');


Route::get('/grammar-correction', function () {
    $title = '';
    $content = '';
    return view('grammar-correction', compact('title', 'content'));
})->name('grammar-correctionPage');
Route::post('/grammar-correction/generate', [ArticleGeneratorController::class, 'grammarCorrection'])->name('grammar-correction');


Route::get('/extract-contact-information', function () {
    $title = '';
    $content = '';
    return view('extract-contact-information', compact('title', 'content'));
})->name('extract-contact-informationPage');
Route::post('/extract-contact-information/generate', [ArticleGeneratorController::class, 'extractContactInformation'])->name('extract-contact-information');


Route::get('/keywords', function () {
    $title = '';
    $content = '';
    return view('keywords', compact('title', 'content'));
})->name('keywordsPage');
Route::post('/keywords/generate', [ArticleGeneratorController::class, 'keywords'])->name('keywords');


Route::get('/laravel-problem-solving', function () {
    $title = '';
    $content = '';
    return view('laravel-problem-solving', compact('title', 'content'));
})->name('laravel-problem-solvingPage');
Route::post('/laravel-problem-solving/generate', [ArticleGeneratorController::class, 'laravelProblemSolving'])->name('laravel-problem-solving');


Route::get('/image-variation', function () {
    $title = '';
    $content = '';
    return view('image-variation', compact('title', 'content'));
})->name('image-variationPage');
Route::post('/image-variation/generate', [ArticleGeneratorController::class, 'imageVariation'])->name('image-variation');