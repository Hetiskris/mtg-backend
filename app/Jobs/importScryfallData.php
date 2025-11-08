<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use JsonMachine\Items;
use stdClass;

use function Laravel\Prompts\info;

class importScryfallData implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(private string $url) {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        info('Importing Scryfall data...');

        $cardsData = Items::fromFile($this->url);
        /** @var stdClass $card */
        foreach ($cardsData as $card) {
            ds($card);
        }

        info('Scryfall data imported successfully.');
    }
}
