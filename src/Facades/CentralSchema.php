<?php

declare(strict_types=1);

namespace CentralSchema\CentralSchema\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CentralSchema\CentralSchema\CentralSchema
 */
class CentralSchema extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \CentralSchema\CentralSchema\CentralSchema::class;
    }
}
