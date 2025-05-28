<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers\Main')->group(function () {
    Route::get('/', 'IndexController')->name('main.index');
});

Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->group(function () {
    Route::namespace('Main')->group(function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
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
});

//Auth::routes();
