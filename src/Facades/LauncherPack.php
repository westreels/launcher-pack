<?php

namespace Westreels\LauncherPack\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Westreels\LauncherPack\LauncherPack
 */
class LauncherPack extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'launcher-pack';
    }
}
