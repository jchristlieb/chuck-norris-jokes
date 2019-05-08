<?php

namespace Jchristlieb\ChuckNorrisJokes;

use Illuminate\Support\ServiceProvider;
use Jchristlieb\ChuckNorrisJokes\Console\ChuckNorrisJoke;
use Jchristlieb\ChuckNorrisJokes\JokeFactory;

class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
<<<<<<< HEAD
        if ($this->app->runningInConsole()) {
            $this->commands([
                ChuckNorrisJoke::class
            ]);
        }
=======
>>>>>>> 117297df61fe691dd2d79b70f23d581d4a778764
    }

    public function register()
    {
        // if someone is looking for a 'chuck-norris'
        // string provide a new JokeFactory
<<<<<<< HEAD
        $this->app->bind('chuck-norris', function (){
=======
        $this->app->bind('chuck-norris', function () {
>>>>>>> 117297df61fe691dd2d79b70f23d581d4a778764
            return new JokeFactory();
        });
    }
}
