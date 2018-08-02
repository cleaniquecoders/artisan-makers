<?php

namespace CleaniqueCoders\ArtisanMakers;

use CleaniqueCoders\ArtisanMakers\Console\Commands\MakeContractCommand;
use CleaniqueCoders\ArtisanMakers\Console\Commands\MakeExceptionCommand;
use CleaniqueCoders\ArtisanMakers\Console\Commands\MakeModelCommand;
use CleaniqueCoders\ArtisanMakers\Console\Commands\MakeObserverCommand;
use CleaniqueCoders\ArtisanMakers\Console\Commands\MakePresenterCommand;
use CleaniqueCoders\ArtisanMakers\Console\Commands\MakeProcessorCommand;
use CleaniqueCoders\ArtisanMakers\Console\Commands\MakeServiceCommand;
use CleaniqueCoders\ArtisanMakers\Console\Commands\MakeTraitCommand;
use CleaniqueCoders\ArtisanMakers\Console\Commands\MakeTransformerCommand;
use Illuminate\Support\ServiceProvider;

class ArtisanMakersServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->commands([
            MakeContractCommand::class,
            MakeExceptionCommand::class,
            MakeModelCommand::class,
            MakeObserverCommand::class,
            MakePresenterCommand::class,
            MakeProcessorCommand::class,
            MakeServiceCommand::class,
            MakeTraitCommand::class,
            MakeTransformerCommand::class,
        ]);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}
