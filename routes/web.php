<?php

use App\Http\Controllers as CONT;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'is_admin'], 'prefix' => 'admin', 'as' => 'admin.'], function (){
    Route::get('dashboard', CONT\DashboardController::class)->name('dashboard');

    Route::resource('carousels', CONT\CarouselController::class)->except('show');
    Route::resource('our-services', CONT\OurServiceController::class)->except('show');
    Route::resource('our-achievements', CONT\OurAchievementController::class)->except('show');
    Route::resource('our-works', CONT\OurWorkController::class)->except('show');

    Route::get('settings', [CONT\SettingController::class, 'index'])->name('settings.index');
    Route::put('settings', [CONT\SettingController::class, 'update'])->name('settings.update');
    Route::put('settings/logo', [CONT\SettingController::class, 'updateLogo'])->name('settings.update.logo');
});


Route::get('/', [CONT\FrontendController::class, 'home'])->name('home');

Route::get('test', function (){
    return trans('head_office');
});

Auth::routes();
