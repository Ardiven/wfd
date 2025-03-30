<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PromotionController;

Route::resource('promotions', PromotionController::class);

