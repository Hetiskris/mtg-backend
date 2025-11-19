<?php

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
        Schema::create('core_card_fields', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->bigInteger('arena_id')->nullable();
            $table->string('lang');
            $table->integer('mtgo_id')->nullable();
            $table->integer('mtgo_foil_id')->nullable();
            $table->json('multiverse_ids')->nullable();
            $table->integer('tcgplayer_id')->nullable();
            $table->integer('tcgplayer_etched_id')->nullable();
            $table->integer('cardmarket_id')->nullable();
            $table->string('object');
            $table->string('layout');
            $table->uuid('oracle_id')->nullable();
            $table->string('prints_search_uri')->nullable();
            $table->string('rulings_uri');
            $table->string('scryfall_uri');
            $table->string('uri');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('core_card_fields');
    }

    /**
     * DB::connection()->setSchemaGrammar(new class extends PostgresGrammar {
     *  protected function typeInt_array(\Illuminate\Support\Fluent $column)
        {
             return 'int[]';
        }
     });
     */
};
