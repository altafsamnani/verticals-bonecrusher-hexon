<?php
namespace Bonecrusher\Hexon;

use Bonecrusher\Hexon\Console\PublishCommand;
use Bonecrusher\Hexon\Console\PublishConfigCommand;
use Config;

class HexonServiceProvider extends \Illuminate\Support\ServiceProvider
{

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Publish the config file
        $configPath = __DIR__ . '/../config/hexon.php';
        $this->publishes([
             $configPath => config_path('hexon.php'),
        ], 'config');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.hexon.publish', function () {
            return new PublishCommand();
        });

        $this->app->singleton('command.hexon.publish-config', function () {
            return new PublishConfigCommand();
        });

        $this->commands(
            'command.hexon.publish',
            'command.hexon.publish-config'
        );
    }

    public function provides()
    {
        return [
            'command.hexon.publish',
            'command.hexon.publish-config',
        ];
    }
}
