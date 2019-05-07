<?php

namespace Jchristlieb\ChuckNorrisJokes\Tests;

use PHPUnit\Framework\TestCase;
use Jchristlieb\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
           'This is a joke',
       ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function it_returns_a_chuck_norris_joke()
    {
        $chuckNorrisJokes = [
            'Chuck Norris counted to infinity... Twice.',
            'They once made a "Chuck Norris" brand toilet paper, but it wouldn\'t take shit from anybody.',
            'Chuck Norris uses pepper spray to spice up his steaks.',
            'Chuck Norris can win a game of Connect Four in only three moves.',
            'Not everyone that Chuck Norris is mad at gets killed. Some get away. They are called astronauts.',
        ];

        $jokes = new JokeFactory();
        $joke = $jokes->getRandomJoke();
        $this->assertContains($joke, $chuckNorrisJokes);
    }
}
