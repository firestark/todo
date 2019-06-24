<?php

use firestark\user\manager;

class users extends facade
{
    public static function getFacadeAccessor ( )
    {
        return manager::class;
    }
}
