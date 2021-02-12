<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::resource('articles', ArticleController::class);

Route::get('articles/{article}/relationships/author',
[\App\Http\Controllers\ArticleRelationshipController::class, 'author'])->name('articles.relationships.author');

Route::get('articles/{article}/author',
[\App\Http\Controllers\ArticleRelationshipController::class, 'author'])->name('articles.author');

Route::get('articles/{article}/relationships/comments',
[\App\Http\Controllers\ArticleRelationshipController::class, 'comments'])->name('articles.relationships.comments');

Route::get('articles/{article}/comments',
[\App\Http\Controllers\ArticleRelationshipController::class, 'comments'])->name('articles.comments');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
