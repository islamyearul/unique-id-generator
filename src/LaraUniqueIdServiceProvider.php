<?php

namespace Yearul\LaraUniqueId;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Yearul\LaraUniqueId\Commands\LaraUniqueIdCommand;

class LaraUniqueIdServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('lara-unique-id')
            ->hasConfigFile()
            ->hasViews()
            // ->hasMigration('create_lara-unique-id_table')
            ->hasCommand(LaraUniqueIdCommand::class);
    }
}
