<?php

namespace CleaniqueCoders\ArtisanMakers\Contracts;

/**
 * All Services should implement this contract.
 */
interface ServiceContract
{
    public static function make($instance);

    public function handle();
}
