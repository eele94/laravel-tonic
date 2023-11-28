<?php

namespace Eele94\Tonic\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Eele94\Tonic\Tonic
 */
class Tonic extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Eele94\Tonic\Tonic::class;
    }
}
