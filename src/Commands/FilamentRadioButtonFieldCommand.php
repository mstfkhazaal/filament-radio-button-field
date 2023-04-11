<?php

namespace Mstfkhazaal\FilamentRadioButtonField\Commands;

use Illuminate\Console\Command;

class FilamentRadioButtonFieldCommand extends Command
{
    public $signature = 'filament-radio-button-field';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
