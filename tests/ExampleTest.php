<?php

namespace Tealorca\LaravelPracticepanther\Tests;

use Orchestra\Testbench\TestCase;
use Tealorca\LaravelPracticepanther\LaravelPracticepantherServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelPracticepantherServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
