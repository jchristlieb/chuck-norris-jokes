<?php

namespace Jchristlieb\ChuckNorrisJokes;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Jchristlieb\ChuckNorrisJokes\Console\ChuckNorrisJoke;
use Jchristlieb\ChuckNorrisJokes\Http\Controllers\ChuckNorrisController;

class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ChuckNorrisJoke::class,
            ]);
        }

        Route::get('chuck-norris', ChuckNorrisController::class);
    }

    public function register()
    {
        // if someone is looking for a 'chuck-norris'
        // string provide a new JokeFactory
        $this->app->bind('chuck-norris', function () {
            return new JokeFactory();
        });
    }
}
