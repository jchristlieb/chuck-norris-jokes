<?php

namespace Jchristlieb\ChuckNorrisJokes\Tests;

use Illuminate\Support\Facades\Artisan;
use Jchristlieb\ChuckNorrisJokes\ChuckNorrisJokesServiceProvider;
use Jchristlieb\ChuckNorrisJokes\Console\ChuckNorrisJoke;
use Jchristlieb\ChuckNorrisJokes\Facades\ChuckNorris;
use Orchestra\Testbench\TestCase;

class LaravelTest extends TestCase
{
    // ensure that test knows the Laravel context
    protected function getPackageProviders($app)
    {
        return [
            ChuckNorrisJokesServiceProvider::class
        ];
    }

    // ensure that the test knows about the Facade
    protected function getPackageAliases($app)
    {
        return [
            'ChuckNorris' => ChuckNorrisJoke::class
        ];
    }

    /** @test */
    public function the_console_command_returns_a_joke()
    {
        $this->withoutMockingConsoleOutput();

        // mock the Facades output
        ChuckNorris::shouldReceive('getRandomJoke')
            ->once()
            ->andReturn('some joke');

        // call artisan command
        $this->artisan('chuck-norris');
        $output = Artisan::output();
        // assert that output is equal to joke
        $this->assertSame('some joke'.PHP_EOL, $output);
    }

}