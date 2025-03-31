<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PromotionController;

Route::resource('promotions', PromotionController::class);
Route::get('/editpage', [PromotionController::class, 'editpage'])->name('promotions.editpage');
// Route::get('/promotions/{promotion}/editpage', [PromotionController::class, 'editpage'])
//     ->name('promotions.editpage');



