<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class importCards extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cards:import-buld-scryfall-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports card bulk data from Scryfall';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info('Dispatching card bulk data import from Scryfall...');

        $path = Storage::disk('local')->path('/data/test.json');

        dispatch(new \App\Jobs\importScryfallData($path));

        $this->info('Import job queued');
    }
}
