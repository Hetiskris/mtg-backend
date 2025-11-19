<?php

namespace App\Jobs;

use App\Actions\Card\CreateCardAction;
use App\Data\Card\CoreCardData;
use App\Enums\Card\Layout;
use App\Models\Card;
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

            $cardModel = $this->createCoreCard($card);
            ds($cardModel);
        }

        info('Scryfall data imported successfully.');
    }

    private function createCoreCard(stdClass $card): Card
    {
        $data = CoreCardData::from([
            'id' => $card->id,
            'lang' => $card->lang,
            'object' => $card->object,
            'layout' => Layout::from($card->layout),
            'rulings_uri' => $card->rulings_uri,
            'scryfall_uri' => $card->scryfall_uri,
            'uri' => $card->uri,
            'arena_id' => $card->arena_id ?? null,
            'mtgo_id' => $card->mtgo_id ?? null,
            'mtgo_foil_id' => $card->mtgo_foil_id ?? null,
            'multiverse_ids' => $card->multiverse_ids ?? null,
            'tcgplayer_id' => $card->tcgplayer_id ?? null,
            'tcgplayer_etched_id' => $card->tcgplayer_etched_id ?? null,
            'cardmarket_id' => $card->cardmarket_id ?? null,
            'oracle_id' => $card->oracle_id ?? null,
            'prints_search_uri' => $card->prints_search_uri ?? null,
        ]);

        new CreateCardAction()->handle($data);

        return Card::query()->find($data->id);
    }
}
