<?php

namespace Jchristlieb\ChuckNorrisJokes\Console;


use Illuminate\Console\Command;
use Jchristlieb\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisJoke extends Command
{
    protected $signature = 'chuck-norris';
    protected $description = 'Print a random joke';

    public function handle()
    {
        $this->info(ChuckNorris::getRandomJoke());
    }
}