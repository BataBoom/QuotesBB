<?php

namespace BataBoom\QuotesBB;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use BataBoom\QuotesBB\Commands\QuotesBBCommand;

class QuotesBBServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('quotesbb')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_quotesbb_table')
            ->hasCommand(QuotesBBCommand::class);
    }
}
