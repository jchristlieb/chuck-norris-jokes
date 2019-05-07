<?php

namespace Jchristlieb\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'Chuck Norris counted to infinity... Twice.',
        'They once made a "Chuck Norris" brand toilet paper, but it wouldn\'t take shit from anybody.',
        'Chuck Norris uses pepper spray to spice up his steaks.',
        'Chuck Norris can win a game of Connect Four in only three moves.',
        'Not everyone that Chuck Norris is mad at gets killed. Some get away. They are called astronauts.',
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
