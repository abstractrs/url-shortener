# Laravel 5 url shortener

[![Total Downloads](https://img.shields.io/packagist/dt/waavi/url-shortener.svg?style=flat-square)](https://packagist.org/packages/djordjevicmladen/url-shortener)

## Introduction

URL shortener package that gives a convenient Laravel Facade for [mremi/UrlShortener](https://github.com/mremi/UrlShortener)

## Laravel compatibility

 Laravel  | translation
:---------|:----------
 5.1.x    | 1.0.x
 5.2.x    | 1.0.1 and higher
 5.5.x    | 1.0.7 and higher
 5.8.x    | 2.0 and higher

## Installation and Setup

Require through composer

    composer require djordjevicmladen/url-shortener

Or manually edit your composer.json file:

    "require": {
        djordjevicmladen/url-shortener": "^2.0"
    }

In config/app.php, add the following entry to the end of the providers array:

    Abstractrs\UrlShortener\UrlShortenerServiceProvider::class,

And the following alias:

    'UrlShortener' => Abstractrs\UrlShortener\Facades\UrlShortener::class,

Publish the configuration file, the form view and the language entries:

    php artisan vendor:publish --provider="Abstractrs\UrlShortener\UrlShortenerServiceProvider"

Check the config files for the environment variables you need to set for the selected driver.

## Usage

### Shorten a url

    ```php
    \UrlShortener::shorten('http://google.com'); // Uses default driver as per config settings
    \UrlShortener::driver('bitly')->shorten('http://google.com');
    ```

### Expand a url

    ```php
    \UrlShortener::expand('http://google.com'); // Uses default driver as per config settings
    \UrlShortener::driver('bitly')->expand('http://google.com');
    ```
