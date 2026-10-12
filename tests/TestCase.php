<?php

declare(strict_types=1);

namespace CentralSchema\CentralSchema\Tests;

use CentralSchema\CentralSchema\CentralSchemaServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            CentralSchemaServiceProvider::class,
        ];
    }
}
