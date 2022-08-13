<?php

namespace Seche\LaravelDhtmlxScheduler\Facades;

use Illuminate\Support\Facades\Facade;

class Scheduler extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-dhtmlx-scheduler';
    }
}
