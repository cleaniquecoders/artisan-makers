<?php

namespace CleaniqueCoders\ArtisanMakers\Contracts;

/**
 * All Processors should implement this contract.
 */
interface ProcessorContract
{
    public static function make($instance);

    public function handle();
}
