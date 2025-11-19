<?php

use App\Models\Card;
use App\Models\Gameplay;
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
        Schema::create('card_related_card_objects', function (Blueprint $table) {
            $table->foreignIdFor(Card::class);
            $table->foreignIdFor(Gameplay::class);

            $table->string('object');
            $table->string('component');
            $table->string('name');
            $table->string('type_line');
            $table->string('uri');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_related_card_objects');
    }
};
