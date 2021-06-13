<?php

namespace Brainspin\LaravelKlicktipp\Facades;

use Illuminate\Support\Facades\Facade;

class Klicktipp extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'klicktipp';
    }
}