<?php

namespace Tobya\Saloon;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tobya\Saloon\Commands\SaloonCommand;

class SaloonServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('saloon')
         //   ->hasCommand(SaloonCommand::class)
        ;
    }
}
