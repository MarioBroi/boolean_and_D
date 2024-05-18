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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('img')->nullable();
            $table->string('race')->nullable();
            $table->string('sex')->nullable();
            $table->string('age')->nullable();
            $table->string('alignment')->nullable();
            $table->string('health_points')->nullable();
            $table->string('class')->nullable();
            $table->string('sub_class')->nullable();
            $table->string('level')->nullable();
            $table->string('armour_class')->nullable();
            $table->string('cd')->nullable();
            $table->text('backstory')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
