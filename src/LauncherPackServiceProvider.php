<?php

namespace Westreels\LauncherPack;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Westreels\LauncherPack\Commands\LauncherPackCommand;

class LauncherPackServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('launcher-pack')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_launcher-pack_table')
            ->hasCommand(LauncherPackCommand::class);
    }
}
