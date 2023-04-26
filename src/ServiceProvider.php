<?php

declare(strict_types=1);

namespace BombenProdukt\BladeIcons\Lindua;

use BombenProdukt\BladeIcons\Facades\IconFamilyRegistry;
use BombenProdukt\BladeIcons\IconFamily;
use BombenProdukt\PackagePowerPack\Package\AbstractServiceProvider;
use Illuminate\Support\Facades\File;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        $directory = resource_path('blade-icons/lindua');

        if (File::exists($directory)) {
            IconFamilyRegistry::push(IconFamily::fromDirectory('lindua', $directory));
        }
    }
}
