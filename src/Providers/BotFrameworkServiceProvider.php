<?php

namespace BotMan\Drivers\BotFramework\Providers;

use Illuminate\Support\ServiceProvider;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\Studio\Providers\StudioServiceProvider;
use BotMan\Drivers\BotFramework\BotFrameworkDriver;
use BotMan\Drivers\BotFramework\BotFrameworkImageDriver;

class BotFrameworkServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if (! $this->isRunningInBotManStudio()) {
            $this->loadDrivers();

            $this->publishes([
                __DIR__.'/../../stubs/botframework.php' => config_path('botman/botframework.php'),
            ]);

            $this->mergeConfigFrom(__DIR__.'/../../stubs/botframework.php', 'botman.botframework');
        }
    }

    /**
     * Load BotMan drivers.
     */
    protected function loadDrivers()
    {
        DriverManager::loadDriver(BotFrameworkDriver::class);
        DriverManager::loadDriver(BotFrameworkImageDriver::class);
    }

    /**
     * @return bool
     */
    protected function isRunningInBotManStudio()
    {
        return class_exists(StudioServiceProvider::class);
    }
}
