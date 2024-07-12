<?php

namespace Bonecrusher\Hexon\Tests;

use Illuminate\Support\Facades\Artisan;

class ConsoleTest extends TestCase
{
    public function testCanPublish()
    {
        Artisan::call('hexon:publish');

        $this->assertTrue(file_exists(config_path('hexon.php')));
    }
}
