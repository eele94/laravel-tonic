<?php

namespace Eele94\Tonic\Commands;

use Eele94\Tonic\Facades\Tonic;
use Illuminate\Console\Command;

class SyncTonicOffersCommand extends Command
{
    public $signature = 'tonic:sync-offers';

    public $description = 'Sync offers from Tonic';

    public function handle(): int
    {
        Tonic::syncOffers();

        return self::SUCCESS;
    }
}
