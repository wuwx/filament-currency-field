<?php

namespace Wuwx\FilamentCurrencyField\Tests;

use Filament\Forms\FormsServiceProvider;
use Filament\Support\SupportServiceProvider;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            SupportServiceProvider::class,
            FormsServiceProvider::class,
            LivewireServiceProvider::class,
        ];
    }
}
