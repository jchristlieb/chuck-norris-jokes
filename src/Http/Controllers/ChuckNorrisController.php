<?php

namespace Jchristlieb\ChuckNorrisJokes\Http\Controllers;

use Jchristlieb\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisController
{
    public function __invoke()
    {
        return ChuckNorris::getRandomJoke();
    }
}
