<?php

namespace GetThingsDone\Types\Tests;

use Orchestra\Testbench\TestCase;
use GetThingsDone\Types\TypesServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [TypesServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
