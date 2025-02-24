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
        Schema::create('service', function (Blueprint $table) {
            $table->id();
            $table->string('catId');
            $table->string('subCatId');
            $table->string('name');
            $table->string('img');
            $table->string('tagLine')->nullable();
            $table->string('content')->nullable();
            $table->integer('price');
            $table->string('options')->nullable(); /* 1,2,3,4 BHK */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service');
    }
};
