<?php

declare(strict_types=1);

namespace Tests;

use BaseCodeOy\PackagePowerPack\TestBench\AbstractPackageTestCase;

/**
 * @internal
 */
abstract class TestCase extends AbstractPackageTestCase
{
    protected function getRequiredServiceProviders(): array
    {
        return [
            \BaseCodeOy\BladeIcons\ServiceProvider::class,
        ];
    }

    protected function getServiceProviderClass(): string
    {
        return \BaseCodeOy\BladeIcons\Lindua\ServiceProvider::class;
    }
}
