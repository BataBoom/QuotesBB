<?php

namespace BataBoom\QuotesBB;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use BataBoom\QuotesBB\Commands\QuotesBBCommand;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Commands\InstallCommand;

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
            ->hasCommand(QuotesBBCommand::class)
            ->hasInstallCommand(function(InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->publishAssets()
                    ->copyAndRegisterServiceProviderInApp()
                    ->askToStarRepoOnGitHub('https://github.com/BataBoom/QuotesBB');
            });

    }

    public function boot()
    {

        Livewire::component('quotesbb', \BataBoom\QuotesBB\Livewire\FlashQuotes::class);

        $this->publishes([
            __DIR__.'/../resources/quotes' => public_path('bataboom/quotesbb'),
        ], 'public');

    }

}
