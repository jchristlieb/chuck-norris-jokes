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

        // load web routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        // load views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'chuck-norris');

        // publish files to vendor project
        // use php artisan vendor:publish to get those published
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/chuck-norris'),
        ]);

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
