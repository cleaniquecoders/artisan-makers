<?php

namespace CleaniqueCoders\ArtisanMakers;

/*
 * This file is part of artisan-makers
 *
 * @license MIT
 * @package artisan-makers
 */

use Illuminate\Support\Facades\Facade;

class ArtisanMakersFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ArtisanMakers';
    }
}
