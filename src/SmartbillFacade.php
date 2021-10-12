<?php

namespace Andali\Smartbill;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Andali\Smartbill\Smartbill
 */
class SmartbillFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-smartbill';
    }
}
