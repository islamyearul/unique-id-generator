<?php

namespace Yearul\LaraUniqueId\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Yearul\LaraUniqueId\LaraUniqueId
 */
class LaraUniqueId extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Yearul\LaraUniqueId\LaraUniqueId::class;
    }
}
