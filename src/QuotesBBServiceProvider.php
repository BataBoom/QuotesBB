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
            ->hasConfigFile('quotesbb')
            ->hasViews()
            ->hasCommand(QuotesBBCommand::class)
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->publishAssets()
                    ->copyAndRegisterServiceProviderInApp()
                    ->askToStarRepoOnGitHub('https://github.com/BataBoom/QuotesBB');
            });
    }

    public function packageBooted()
    {
        // Register the Livewire component
        Livewire::component('flash-quotes', \BataBoom\QuotesBB\Livewire\FlashQuotes::class);

        // Publish the quotes resources
        $this->publishes([
            __DIR__.'/../resources/quotes' => public_path('bataboom/quotesbb'),
        ], 'public');

        // Load views from the specified path and namespace
        $this->loadViewsFrom(__DIR__.'/../resources/views/livewire/quotesbb', 'quotesbb');
    }

}
