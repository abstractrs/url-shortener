<?php

namespace Abstractrs\UrlShortener\Test;

class FactoryTest extends TestCase
{
    /**
     *  @test
     */
    public function it_creates_google_driver()
    {
        $factory = $this->app['urlshortener.factory'];
        $driver  = $factory->make('google');
        $this->assertInstanceOf(\Abstractrs\UrlShortener\Drivers\Google::class, $driver);
    }

    /**
     *  @test
     */
    public function it_creates_bitly_driver()
    {
        $factory = $this->app['urlshortener.factory'];
        $driver  = $factory->make('bitly');
        $this->assertInstanceOf(\Abstractrs\UrlShortener\Drivers\Bitly::class, $driver);
    }

    /**
     *  @test
     */
    public function it_throws_exception_on_invalid_name()
    {
        $this->expectException('InvalidArgumentException');
        $factory = $this->app['urlshortener.factory'];
        $driver  = $factory->make('random');
    }
}
