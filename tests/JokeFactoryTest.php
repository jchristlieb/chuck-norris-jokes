<?php

namespace Jchristlieb\ChuckNorrisJokes\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Handler\MockHandler;
use Jchristlieb\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        // mock the expected request
        $mock = new MockHandler([
            new Response(200, [], '{ "type": "success", "value": { "id": 154, "joke": "Movie trivia: The movie &quot;Invasion U.S.A.&quot; is, in fact, a documentary.", "categories": [] } }'),
        ]);

        // handle the mock request through guzzle client
        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);

        $jokes = new JokeFactory($client);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('Movie trivia: The movie &quot;Invasion U.S.A.&quot; is, in fact, a documentary.', $joke);
    }
}
