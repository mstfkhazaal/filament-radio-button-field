<?php

namespace Mstfkhazaal\FilamentRadioButtonField;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Mstfkhazaal\FilamentRadioButtonField\Commands\FilamentRadioButtonFieldCommand;

class FilamentRadioButtonFieldServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-radio-button-field')
            ->hasViews();
    }
}
