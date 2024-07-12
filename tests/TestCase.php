<?php

namespace Bonecrusher\Hexon\Tests;

use Bonecrusher\Hexon\HexonServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            HexonServiceProvider::class,
        ];
    }
}
