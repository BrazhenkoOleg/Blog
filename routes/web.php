<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::namespace('App\Http\Controllers\Main')->group(function () {
    Route::get('/', 'IndexController')->name('main.index');
});

Route::namespace('App\Http\Controllers\Post')->prefix('posts')->group(function () {
    Route::get('/', 'IndexController')->name('posts.index');
    Route::get('/{post}', 'ShowController')->name('posts.show');
    Route::namespace('Comment')->prefix('{post}/comments')->group(function () {
        Route::post('/', 'StoreController')->name('posts.comment.store');
    });
    Route::namespace('Like')->prefix('{post}/likes')->group(function () {
        Route::post('/', 'StoreController')->name('posts.likes.store');
    });
});

Route::namespace('App\Http\Controllers\Personal')->prefix('personal')->middleware(['auth', 'verified'])->group(function () {
    Route::namespace('Main')->group(function () {
        Route::get('/', 'IndexController')->name('personal.main.index');
    });
    Route::namespace('Liked')->prefix('liked')->group(function () {
        Route::get('/', 'IndexController')->name('personal.liked.index');
        Route::delete('/{post}', 'DestroyController')->name('personal.liked.destroy');
    });
    Route::namespace('Comment')->prefix('comments')->group(function () {
        Route::get('/', 'IndexController')->name('personal.comments.index');
        Route::get('/{comment}/edit', 'EditController')->name('personal.comments.edit');
        Route::patch('/{comment}', 'UpdateController')->name('personal.comments.update');
        Route::delete('/{comment}', 'DestroyController')->name('personal.comments.destroy');
    });
});

Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->middleware(['auth', 'admin', 'verified'])->group(function () {
    Route::namespace('Main')->group(function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
    });

    Route::namespace('Post')->prefix('posts')->group(function () {
        Route::get('/', 'IndexController')->name('admin.posts.index');
        Route::get('/create', 'CreateController')->name('admin.posts.create');
        Route::post('/', 'StoreController')->name('admin.posts.store');
        Route::get('/{post}', 'ShowController')->name('admin.posts.show');
        Route::get('/{post}/edit', 'EditController')->name('admin.posts.edit');
        Route::patch('/{post}', 'UpdateController')->name('admin.posts.update');
        Route::delete('/{post}', 'DestroyController')->name('admin.posts.destroy');
    });

    Route::namespace('Category')->prefix('categories')->group(function () {
        Route::get('/', 'IndexController')->name('admin.categories.index');
        Route::get('/create', 'CreateController')->name('admin.categories.create');
        Route::post('/', 'StoreController')->name('admin.categories.store');
        Route::get('/{category}', 'ShowController')->name('admin.categories.show');
        Route::get('/{category}/edit', 'EditController')->name('admin.categories.edit');
        Route::patch('/{category}', 'UpdateController')->name('admin.categories.update');
        Route::delete('/{category}', 'DestroyController')->name('admin.categories.destroy');
    });

    Route::namespace('Tag')->prefix('tags')->group(function () {
        Route::get('/', 'IndexController')->name('admin.tags.index');
        Route::get('/create', 'CreateController')->name('admin.tags.create');
        Route::post('/', 'StoreController')->name('admin.tags.store');
        Route::get('/{tag}', 'ShowController')->name('admin.tags.show');
        Route::get('/{tag}/edit', 'EditController')->name('admin.tags.edit');
        Route::patch('/{tag}', 'UpdateController')->name('admin.tags.update');
        Route::delete('/{tag}', 'DestroyController')->name('admin.tags.destroy');
    });

    Route::namespace('User')->prefix('users')->group(function () {
        Route::get('/', 'IndexController')->name('admin.users.index');
        Route::get('/create', 'CreateController')->name('admin.users.create');
        Route::post('/', 'StoreController')->name('admin.users.store');
        Route::get('/{user}', 'ShowController')->name('admin.users.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.users.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.users.update');
        Route::delete('/{user}', 'DestroyController')->name('admin.users.destroy');
    });

});

Auth::routes(['verify' => true]);
