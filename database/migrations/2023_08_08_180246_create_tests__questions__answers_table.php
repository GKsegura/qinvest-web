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
        Schema::create('Test_Question_Answer', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_test');
            $table->unsignedBigInteger('fk_question');
            $table->unsignedBigInteger('fk_answer');
            $table->timestamps();
            $table->foreign('fk_test')->references('id_test')->on('Test');
            $table->foreign('fk_question')->references('id_question')->on('Question');
            $table->foreign('fk_answer')->references('id_answer')->on('Answer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests__questions__answers');
    }
};
