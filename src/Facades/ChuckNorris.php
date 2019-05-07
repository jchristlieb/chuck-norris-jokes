<?php

namespace Jchristlieb\ChuckNorrisJokes\Facades;

use Illuminate\Support\Facades\Facade;

class ChuckNorris extends Facade
{
    // if you want to instantiate the ChuckNorris object
    // use the 'chuck-norris' string
    protected static function getFacadeAccessor()
    {
        return 'chuck-norris';
    }
}
