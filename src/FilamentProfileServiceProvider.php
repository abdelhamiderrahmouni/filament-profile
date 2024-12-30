<?php

namespace AbdelhamidErrahmouni\FilamentProfile;

use Filament\PluginServiceProvider;
use Livewire\Livewire;
use AbdelhamidErrahmouni\FilamentProfile\Pages\Profile;

class FilamentProfileServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-profile';

    public function packageBooted(): void
    {
        parent::packageBooted();

        Livewire::component(Profile::getName(), Profile::class);
    }
}
