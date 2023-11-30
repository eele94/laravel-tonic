<?php

namespace Eele94\Tonic;

use Eele94\Tonic\Commands\TonicCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TonicServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-tonic')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-tonic_verticals_table')
            ->hasMigration('create_laravel-tonic_offers_table')
            ->hasCommand(TonicCommand::class);
    }
}
