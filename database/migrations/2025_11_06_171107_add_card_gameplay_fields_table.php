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

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
