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
        Schema::create('Question', function (Blueprint $table) {
            $table->bigIncrements('id_question');
            $table->unsignedBigInteger('fk_form');
            $table->integer('number_question');
            $table->string('text_question');
            $table->timestamps();
            $table->foreign('fk_form')->references('id_form')->on('Forms');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
