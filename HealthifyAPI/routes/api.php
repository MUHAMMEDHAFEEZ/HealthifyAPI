<?php

use App\Http\Controllers\Api\HealthTipController;
use Illuminate\Support\Facades\Route;

Route::get('/random-tip', [HealthTipController::class, 'getRandomTip']);
