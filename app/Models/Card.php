<?php

namespace App\Models;

use App\Enums\Card\Layout;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property ?int $arena_id
 * @property string $lang
 * @property ?int $mtgo_id
 * @property ?int $mtgo_foil_id
 * @property ?array $multiverse_ids
 * @property ?int $tcgplayer_id
 * @property ?int $tcgplayer_etched_id
 * @property ?int $cardmarket_id
 * @property string $object
 * @property Layout $layout
 * @property ?int $oracle_id
 * @property ?string $prints_search_uri
 * @property string $rulings_uri
 * @property string $scryfall_uri
 * @property string $uri
 */
class Card extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $table = 'core_card_fields';

    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'multiverse_ids' => 'array',
            'layout' => Layout::class,
        ];
    }
}
