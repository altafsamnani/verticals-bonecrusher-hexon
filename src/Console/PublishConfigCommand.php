<?php
/**
 * @author André Aleixo <andre.aleixo@olx.com>
 * @copyright 2017 Naspers Classifieds
 */
namespace Bonecrusher\Hexon\Console;

use Illuminate\Console\Command;

class PublishConfigCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'hexon:publish-config';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish config';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->info('Publish config files');
        $this->call('vendor:publish', [
            '--provider' => 'Bonecrusher\Hexon\HexonServiceProvider',
            '--tag'      => ['config'],
        ]);
    }
}
