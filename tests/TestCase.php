<?php

namespace Eele94\Tonic\Tests;

use Eele94\Tonic\TonicServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Schema;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Eele94\\Tonic\\Database\\Factories\\' . class_basename($modelName) . 'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            TonicServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        // config()->set('database.default', 'testing');

        Schema::dropAllTables();
        $migration = include __DIR__ . '/../database/migrations/create_tonic_verticals_table.php';
        $migration->up();
        $migration = include __DIR__ . '/../database/migrations/create_tonic_offers_table.php';
        $migration->up();
    }
}
