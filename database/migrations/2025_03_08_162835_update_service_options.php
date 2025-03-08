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
        Schema::table('serviceOptions', function (Blueprint $table) {
            $table->renameColumn('serviceId', 'optionId');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('serviceOptions', function (Blueprint $table) {
            $table->renameColumn('optionId', 'serviceId');
        });
    }
};
