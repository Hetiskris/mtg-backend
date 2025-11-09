<?php

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
        Schema::create('card_face_object_fields', function (Blueprint $table) {
            $table->foreignIdFor(Gameplay::class);

            $table->string("artist")->nullable();
            $table->uuid("artist_id")->nullable();
            $table->decimal("cmc")->nullable();
            $table->json("color_indicator")->nullable();
            $table->json("colors")->nullable();
            $table->string("defense")->nullable();
            $table->string("flavor_text")->nullable();
            $table->uuid("illustration_id")->nullable();
            $table->json("image_uris")->nullable();
            $table->string("layout")->nullable();
            $table->string("loyalty")->nullable();
            $table->string("mana_cost");
            $table->string("name");
            $table->string("object");
            $table->uuid("orcale_id")->nullable();
            $table->string("oracle_text")->nullable();
            $table->string("power")->nullable();
            $table->string("printed_name")->nullable();
            $table->string("printed_text")->nullable();
            $table->string("printed_type_line")->nullable();
            $table->string("toughness")->nullable();
            $table->string("type_line")->nullable();
            $table->string("watermark")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_face_object_fields');
    }
};
