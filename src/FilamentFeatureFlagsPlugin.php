<?php

namespace RyanChandler\FilamentFeatureFlags;

use Filament\Contracts\Plugin;
use Filament\Panel;
use RyanChandler\FilamentFeatureFlags\Resources\FeatureFlagResource;

class FilamentFeatureFlagsPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-feature-flags';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                FeatureFlagResource::class,
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }

}
