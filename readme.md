[![Build Status](https://travis-ci.com/jchristlieb/chuck-norris-jokes.svg?branch=master)](https://travis-ci.com/jchristlieb/chuck-norris-jokes)
[![StyleCI](https://github.styleci.io/repos/185214456/shield?branch=master)](https://github.styleci.io/repos/185214456)
# Chuck Norris Jokes

### 1. Require the package
```
composer require jchristlieb\chuck-norris-jokes
```

### 2. Display jokes 
```
Route::get('/joke', function (){
    $jokes = new \Jchristlieb\ChuckNorrisJokes\JokeFactory();

    return view('joke', [
        'joke' => $jokes->getRandomJoke()
    ]);
});
```

