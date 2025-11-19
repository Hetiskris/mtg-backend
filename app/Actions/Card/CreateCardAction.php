<?php

declare(strict_types=1);

namespace App\Actions\Card;

use App\Data\Card\CoreCardData;
use App\Models\Card;
use Illuminate\Support\Facades\DB;

class CreateCardAction
{
    public function handle(CoreCardData $data): void
    {
        DB::transaction(static function () use ($data): void {
            Card::query()->updateOrCreate([
            'id' => $data->id], $data->except('id')->toArray())->save();
        });
    }
}
