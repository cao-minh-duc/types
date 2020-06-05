<?php

namespace GetThingsDone\Types;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GetThingsDone\Types\Skeleton\SkeletonClass
 */
class TypesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'types';
    }
}
