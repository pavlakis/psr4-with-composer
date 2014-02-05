## Getting started with Composer and PSR-4

Initial gist can be found at: [https://gist.github.com/pavlakis/8810829]

This is a very basic getting started example for setting up a basic project using PSR-4 and using composer's autoloader to run the tests.

There are 5 files in total:

>Initially used just for composer to generate the autoloader

* MyApp/composer.json


>Create a class with the application namespace MyApp\Http

* MyApp/src/Http/Request.php

>Create a test with its own namespace MyApp\Tests\Http

* MyApp/tests/Http/RequestTest.php


>The bootstrap file for phpunit

* MyApp/tests/bootstrap.php


> For phpunit to know how to bootstrap the application

* MyApp/tests/phpunit.xml.dist


