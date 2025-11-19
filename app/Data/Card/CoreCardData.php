<?php

declare(strict_types=1);

namespace App\Data\Card;

use App\Enums\Card\Layout;
use Spatie\LaravelData\Data;

class CoreCardData extends Data
{
    public function __construct(
        public string $id,
        public string $lang,
        public string $object,
        public Layout $layout,
        public string $rulings_uri,
        public string $scryfall_uri,
        public string $uri,
        public ?int $arena_id = null,
        public ?int $mtgo_id = null,
        public ?int $mtgo_foil_id = null,
        public ?array $multiverse_ids = null,
        public ?int $tcgplayer_id = null,
        public ?int $tcgplayer_etched_id = null,
        public ?int $cardmarket_id = null,
        public ?string $oracle_id = null,
        public ?string $prints_search_uri = null,
    ) {}
}
