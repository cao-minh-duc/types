<?php

namespace GetThingsDone\Types;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class Types
{
    public static function exists(string $type): bool
    {
        return class_exists($type) 
            && ( new $type instanceof CastsAttributes );
    }

    public static function doesntExist(string $type): bool
    {
        return !self::exists($type);
    }
}
