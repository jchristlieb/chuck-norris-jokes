[![Build Status](https://travis-ci.com/jchristlieb/chuck-norris-jokes.svg?branch=master)](https://travis-ci.com/jchristlieb/chuck-norris-jokes)

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

