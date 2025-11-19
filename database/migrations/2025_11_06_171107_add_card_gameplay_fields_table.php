<?php

use App\Models\Card;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('card_gameplay_fields', function (Blueprint $table) {
            $table->foreignIdFor(Card::class)->unique()->index();

            $table->decimal('cmc');
            $table->json('color_identity');
            $table->json('colors')->nullable();
            $table->string('defense')->nullable();
            $table->integer('edhrec_rank')->nullable();
            $table->boolean('game_changer')->nullable();
            $table->string('hand_modifier')->nullable();
            $table->json('keywords');
            $table->json('legalities');
            $table->string('life_modifier')->nullable();
            $table->string('loyalty')->nullable();
            $table->string('name');
            $table->string('oracle_text')->nullable();
            $table->integer('penny_rank')->nullable();
            $table->string('power')->nullable();
            $table->json('produced_mana')->nullable();
            $table->boolean('reserved');
            $table->string('toughness')->nullable();
            $table->string('type_line');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_gameplay_fields');
    }
};
