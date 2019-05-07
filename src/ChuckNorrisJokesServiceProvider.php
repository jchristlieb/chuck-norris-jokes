<?php

namespace Jchristlieb\ChuckNorrisJokes;

use Illuminate\Support\ServiceProvider;

class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
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
