<?php

use ErnandesRS\Pack4Laravel\Http\Controllers\Pack4LaravelController;
use Illuminate\Support\Facades\Route;

Route::get("jujubas", [Pack4LaravelController::class, 'index']);