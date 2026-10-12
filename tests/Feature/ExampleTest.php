<?php

declare(strict_types=1);

use CentralSchema\CentralSchema\CentralSchema;
use Illuminate\Support\Facades\Schema;

it('resolves the singleton', function () {
    expect(app(CentralSchema::class))->toBeInstanceOf(CentralSchema::class);
});

it('returns the same instance from the container', function () {
    expect(app(CentralSchema::class))->toBe(app(CentralSchema::class));
});

it('merges the package config', function () {
    expect(config('central-schema.placeholder'))->toBe('default');
});

it('loads the central migrations', function () {
    $this->artisan('migrate')
        ->assertSuccessful();

    expect(Schema::hasTable('plans'))->toBeTrue()
        ->and(Schema::hasTable('subscriptions'))->toBeTrue()
        ->and(Schema::hasTable('tenants'))->toBeTrue();
});
