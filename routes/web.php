<?php

use Illuminate\Support\Facades\Route;
use Jchristlieb\ChuckNorrisJokes\Http\Controllers\ChuckNorrisController;

Route::get('chuck-norris', ChuckNorrisController::class);