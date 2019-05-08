<?php

use Illuminate\Support\Facades\Route;
use Jchristlieb\ChuckNorrisJokes\Http\Controllers\ChuckNorrisController;

Route::get(config('chuck-norris.route'), ChuckNorrisController::class);