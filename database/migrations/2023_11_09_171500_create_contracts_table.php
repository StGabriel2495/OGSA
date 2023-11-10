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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('path');
            $table->integer('size');
            $table->foreignId('project_id')->constrained();
            $table->foreignId('sector_id')->constrained();
            $table->foreignId('zoneofinterest_id')->constrained();
            $table->foreignId('ressource_id')->constrained();
            $table->foreignId('contracttype_id')->constrained();
            $table->foreignId('stateentite_id')->constrained();
            $table->foreignId('comment_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
