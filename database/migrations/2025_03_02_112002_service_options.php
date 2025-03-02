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
        Schema::create('serviceOptions', function (Blueprint $table) {
            $table->id();
            $table->integer('catId');
            $table->integer('subCatId');
            $table->integer('serviceId')->nullable();
            $table->string('options')->nullable();
            $table->integer('price');
            $table->text('included')->nullable();
            $table->text('excluded')->nullable();
            $table->text('provideByCustomer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('serviceOptions');
    }
};
