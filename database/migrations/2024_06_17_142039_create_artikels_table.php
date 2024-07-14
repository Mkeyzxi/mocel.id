<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    public function up(): void
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            // $table->uuid('writer'); 
            // $table->foreign('writer')->references('id')->on('users')->onDelete('cascade');
            $table->string('writer');
            $table->longText('paragraph');
            $table->enum('category', ['Artikel', 'Tutorial', 'Tips & Trik']);
            // $table->string('color');
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('artikels');
    }
};