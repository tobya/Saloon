<?php

namespace Tobya\Saloon;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tobya\Saloon\Commands\SaloonCommand;

class SaloonServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
     
        $package
            ->name('saloon')
         //   ->hasCommand(SaloonCommand::class)
        ;
    }
}
