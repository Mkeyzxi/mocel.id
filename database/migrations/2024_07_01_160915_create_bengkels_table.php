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
        Schema::create('bengkels', function (Blueprint $table) {
            $table->id();
            $table->string('workshop_name');
            $table->text('address');
            $table->float('rating', 1, 1)->default(0);
            $table->text('ability');
            $table->text('google_maps')->nullable();
            $table->string('city')->nullable();
            $table->enum('workshop_category',['specialist','official'])->nullable();
            $table->string('workshop_image');
            $table->string('workshop_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bengkels');
    }
};
