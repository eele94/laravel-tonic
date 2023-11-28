<?php

namespace Eele94\Tonic\Commands;

use Illuminate\Console\Command;

class TonicCommand extends Command
{
    public $signature = 'laravel-tonic';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
