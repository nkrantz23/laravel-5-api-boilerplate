# Laravel 5 API Boilerplate
[![Build Status](https://travis-ci.org/petflow/laravel-5-api-boilerplate.svg?branch=master)](https://travis-ci.org/petflow/laravel-5-api-boilerplate)[![Latest Stable Version](https://poser.pugx.org/petflow/laravel-5-api-boilerplate/v/stable.svg)](https://packagist.org/packages/petflow/laravel-5-api-boilerplate) [![Total Downloads](https://poser.pugx.org/petflow/laravel-5-api-boilerplate/downloads.svg)](https://packagist.org/packages/petflow/laravel-5-api-boilerplate) [![Latest Unstable Version](https://poser.pugx.org/petflow/laravel-5-api-boilerplate/v/unstable.svg)](https://packagist.org/packages/petflow/laravel-5-api-boilerplate) [![License](https://poser.pugx.org/petflow/laravel-5-api-boilerplate/license.svg)](https://packagist.org/packages/petflow/laravel-5-api-boilerplate)

A bit of scaffolding we're using to create some web services on Laravel 5.

## Usage
To get started, clone this repository and run:

~~~bash
$ composer install
~~~

After thats finished, you'll need to create a test database in order to run your tests. One way to do so is:

~~~bash
$ cp .env.testing .env
$ touch storage/testing.sqlite
$ php artisan migrate --env=testing
$ vendor/bin/codecept run
~~~

This will set your applications default runtime to the 'test' environment. If you want to change that (i.e for local testing), just copy .env.example to .env and then edit .env to match your local settings.

~~~bash
$ cp .env.example .env
~~~

[More on Laravel 5 environment variables](http://mattstauffer.co/blog/laravel-5.0-environment-detection-and-environment-variables)

## Features
* Acceptence testing with Codeception, using an API suite.
* Travis build with migrations and test runner.
* Various packages (listed below) that are useful in our development.

## Packages
* [Codeception](http://codeception.com/)
* [Fractal](https://github.com/thephpleague/fractal)
* [Factory Muffin](https://github.com/thephpleague/factory-muffin)
* [OAuth 2.0 Client](https://github.com/thephpleague/oauth2-client)