<?php

declare(strict_types=1);

use CentralSchema\CentralSchema\CentralSchema;

it('resolves the singleton', function () {
    expect(app(CentralSchema::class))->toBeInstanceOf(CentralSchema::class);
});

it('returns the same instance from the container', function () {
    expect(app(CentralSchema::class))->toBe(app(CentralSchema::class));
});

it('merges the package config', function () {
    expect(config('central-schema.placeholder'))->toBe('default');
});

it('registers the artisan command', function () {
    $this->artisan('central-schema:placeholder')
        ->expectsOutputToContain('CentralSchema placeholder command executed.')
        ->assertSuccessful();
});
