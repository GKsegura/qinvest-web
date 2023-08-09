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
        Schema::create('Test', function (Blueprint $table) {
            $table->bigIncrements('id_test');
            $table->timestamp('date_test');
            $table->unsignedBigInteger('fk_form');
            $table->unsignedBigInteger('fk_user');
            $table->unsignedBigInteger('fk_investor');
            $table->boolean('deleted');
            $table->integer('grade');
            $table->timestamps();
            $table->foreign('fk_form')->references('id_form')->on('Form');
            $table->foreign('fk_user')->references('id_user')->on('User');
            $table->foreign('fk_investor')->references('id_investor')->on('Investor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
