<?php

namespace Tealorca\LaravelPracticepanther;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tealorca\LaravelPracticepanther\Skeleton\SkeletonClass
 */
class LaravelPracticepantherFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-practicepanther';
    }
}
