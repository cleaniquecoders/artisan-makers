<?php

namespace CleaniqueCoders\ArtisanMakers\Tests;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            CleaniqueCoders\ArtisanMakers\ArtisanMakersServiceProvider::class,
        ];
    }
}
