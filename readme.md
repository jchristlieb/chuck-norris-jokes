[![Build Status](https://travis-ci.com/jchristlieb/chuck-norris-jokes.svg?branch=master)](https://travis-ci.com/jchristlieb/chuck-norris-jokes)
[![StyleCI](https://github.styleci.io/repos/185214456/shield?branch=master)](https://github.styleci.io/repos/185214456)

# Chuck Norris Jokes

This is a library that supports you with random Chuck Norris Jokes. 

## Installation

Require the package using composer:

```bash
composer require jchristlieb/chuck-norris-jokes
```

## Usage

```php
use Jchristlieb\ChuckNorrisJokes\JokeFactory;

$jokes = new JokeFactory();

$joke = $jokes->getRandomJoke()
```

## Credits
Marcel Pociot's [PHP Package Development Course](https://phppackagedevelopment.com)

## License
[MIT](https://choosealicense.com/licenses/mit/)

