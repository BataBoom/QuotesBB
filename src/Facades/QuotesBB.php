<?php

namespace BataBoom\QuotesBB\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BataBoom\QuotesBB\QuotesBB
 */
class QuotesBB extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \BataBoom\QuotesBB\QuotesBB::class;
    }
}
