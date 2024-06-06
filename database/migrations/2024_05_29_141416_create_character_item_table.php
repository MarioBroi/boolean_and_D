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
        Schema::create('character_item', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')
                ->references('id')
                ->on('items')
                ->cascadeOnDelete();

            $table->unsignedBigInteger('character_id');
            $table->foreign('character_id')
                ->references('id')
                ->on('characters')
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('character_item');
    }
};
