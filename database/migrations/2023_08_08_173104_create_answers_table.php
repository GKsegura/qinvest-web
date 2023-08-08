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
        Schema::create('Answer', function (Blueprint $table) {
            $table->bigIncrements('id_answer');
            $table->unsignedBigInteger('fk_question');
            $table->string('text_answer');
            $table->char('letter', 1);
            $table->integer('rating');
            $table->timestamps();
            $table->foreign('fk_question')->references('id_question')->on('Question');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
