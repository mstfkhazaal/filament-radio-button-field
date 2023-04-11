<?php

namespace Mstfkhazaal\FilamentRadioButtonField\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mstfkhazaal\FilamentRadioButtonField\FilamentRadioButtonField
 */
class FilamentRadioButtonField extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mstfkhazaal\FilamentRadioButtonField\FilamentRadioButtonField::class;
    }
}
