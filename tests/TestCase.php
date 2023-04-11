<?php

namespace Mstfkhazaal\FilamentRadioButtonField\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Mstfkhazaal\FilamentRadioButtonField\FilamentRadioButtonFieldServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Mstfkhazaal\\FilamentRadioButtonField\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            FilamentRadioButtonFieldServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_filament-radio-button-field_table.php.stub';
        $migration->up();
        */
    }
}
