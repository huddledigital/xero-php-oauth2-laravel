<?php namespace Huddle\Xero\Facades;

use Illuminate\Support\Facades\Facade;

class Xero extends Facade {

    /**
     * Return facade accessor.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'xero'; }

}