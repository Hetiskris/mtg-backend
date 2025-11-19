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
        Schema::create('card_print_fields', function (Blueprint $table) {
            $table->foreignIdFor(Card::class);

            $table->string('artist')->nullable();
            $table->json('artist_ids')->nullable();
            $table->json('attraction_lights')->nullable();
            $table->boolean('booster');
            $table->string('border_color');
            $table->uuid('card_back_id');
            $table->string('collector_number');
            $table->boolean('content_warning')->nullable();
            $table->boolean('digital');
            $table->json('finishes');
            $table->string('flavor_name')->nullable();
            $table->string('flavor_text')->nullable();
            $table->json('frame_effects')->nullable();
            $table->string('frame');
            $table->boolean('full_art');
            $table->json('games');
            $table->boolean('highres_image');
            $table->uuid('illustration_id')->nullable();
            $table->string('image_status');
            $table->json('image_uris')->nullable();
            $table->boolean('oversized'); // default false
            $table->json('prices');
            $table->string('printed_name')->nullable();
            $table->string('printed_text')->nullable();
            $table->string('printed_type_line')->nullable();
            $table->boolean('promo'); // default false
            $table->json('promo_types')->nullable();
            $table->json('purchase_uris')->nullable();
            $table->string('rarity');
            $table->json('related_uris');
            $table->date('released_at');
            $table->boolean('reprint');
            $table->string('scryfall_set_uri');
            $table->string('set_name');
            $table->string('set_search_uri');
            $table->string('set_type');
            $table->string('set_uri');
            $table->string('set');
            $table->uuid('set_id');
            $table->boolean('story_spotlight');
            $table->boolean('textless');
            $table->boolean('variation');
            $table->uuid('variation_of')->nullable();
            $table->string('security_stamp')->nullable();
            $table->string('watermark')->nullable();
            $table->json('preview')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_print_fields');
    }
};
