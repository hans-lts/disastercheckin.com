<?php

use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\PhoneNumberController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SubscribeController;
use Illuminate\Support\Facades\Route;

Route::post('/search', SearchController::class)->name('search');
Route::get('/stats', AnalyticsController::class);

Route::get('/{phone_number}', PhoneNumberController::class)
    ->name('phone-number')
    ->where('phone_number', '[0-9\+]+');

Route::post('/subscribe', SubscribeController::class)->name('subscribe');
