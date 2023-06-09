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
        Schema::create('author_infos', function (Blueprint $table) {
            $table->id();
            $table->string('logo', 2048)->nullable();
            $table->string('title', 2048);
            $table->string('intro_title', 2048);
            $table->string('intro', 2048);
            $table->string('github');
            $table->string('linkedin');
            $table->string('email');
            $table->longText('about_body');
            $table->string('author_image', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('author_infos');
    }
};
