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
            $table->date('sigaturedate');

            //$table->unsignedBigInteger('project_id');
            //$table->foreign('project_id')->references('id')->on('projects');
            $table->foreignId('project_id')->constrained();

            //$table->unsignedBigInteger('sector_id');
            //$table->foreign('sector_id')->references('id')->on('sectors');
            $table->foreignId('sector_id')->constrained();

            //$table->unsignedBigInteger('zoneofinterest_id');
            //$table->foreign('zoneofinterest_id')->references('id')->on('zoneofinterests');
            $table->foreignId('zoneofinterest_id')->constrained();

            //$table->unsignedBigInteger('ressource_id');
            //$table->foreign('ressource_id')->references('id')->on('ressources');
           $table->foreignId('ressource_id')->constrained();

            //$table->unsignedBigInteger('contracttype_id');
            //$table->foreign('contracttype_id')->references('id')->on('contracttypes');
            $table->foreignId('contracttype_id')->constrained();

            //$table->unsignedBigInteger('stateentite_id');
            //$table->foreign('stateentite_id')->references('id')->on('stateentites');
            $table->foreignId('stateentite_id')->constrained();

            //$table->unsignedBigInteger('comment_id');
            //$table->foreign('comment_id')->references('id')->on('comments');
            $table->foreignId('comment_id')->constrained();

            //$table->unsignedBigInteger('documenttype_id');
            //$table->foreign('documenttype_id')->references('id')->on('documenttypes');
            $table->foreignId('documenttype_id')->constrained();

            //$table->unsignedBigInteger('illicitepractice_id');
            //$table->foreign('illicitepractice_id')->references('id')->on('illicitepractices');
            $table->foreignId('illicitepractice_id')->constrained();
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
