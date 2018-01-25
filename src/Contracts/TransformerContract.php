<?php

namespace CleaniqueCoders\ArtisanMakers\Contracts;

/**
 * All Transformers should implement this contract
 */
interface TransformerContract
{
    public static function make();
    public function transform($object);
}
