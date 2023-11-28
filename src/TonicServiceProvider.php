<?php

namespace Eele94\Tonic;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Eele94\Tonic\Commands\TonicCommand;

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
            ->hasMigration('create_laravel-tonic_table')
            ->hasCommand(TonicCommand::class);
    }
}
