<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\NotificationController; // Thêm dòng này

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::resource('notifications', NotificationController::class); // Sửa dòng này
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::get('/viewprofile', [ProfileController::class, 'show'])->name('viewprofile');
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::resource('notifications', App\Http\Controllers\Admin\NotificationController::class);

    // Thêm route cho action create
    Route::get('notifications/create', [App\Http\Controllers\Admin\NotificationController::class, 'create'])->name('voyager.notifications.create'); 
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::resource('notifications', App\Http\Controllers\Admin\NotificationController::class);

    // Thêm route cho action create
    Route::get('notifications/create', [App\Http\Controllers\Admin\NotificationController::class, 'create'])->name('voyager.notifications.create'); 

    // Thêm route cho action store
    Route::post('notifications', [App\Http\Controllers\Admin\NotificationController::class, 'store'])->name('voyager.notifications.store'); 
});
